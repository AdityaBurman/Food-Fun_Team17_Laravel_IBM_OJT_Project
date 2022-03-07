(function(jQuery) {
  "use strict";
  if(typeof gsap !== typeof undefined) {
    if (typeof ScrollTrigger !== typeof undefined) {
      gsap.registerPlugin(ScrollTrigger);
    }

    const gsapAnimate = {
      onStart : (elem) => {
        const option = {
          opacity: 0,
          scale: 1,
          position: {
            x: 0,
            y:0,
          },
          ease: "",
          duration: 1,
          delay: .4,
          rotate: 0
        }

        option.position.x = gsapAnimate.validValue(elem.dataset.iqPositionX, 0)

        option.position.y = gsapAnimate.validValue(elem.dataset.iqPositionY, 0)

        option.rotate = gsapAnimate.validValue(elem.dataset.iqRotate, 0)

        option.scale = gsapAnimate.validValue(elem.dataset.iqScale, 1)

        option.opacity = gsapAnimate.validValue(elem.dataset.iqOpacity, 0)

        option.delay = gsapAnimate.validValue(elem.dataset.iqDelay, .4)

        option.duration = gsapAnimate.validValue(elem.dataset.iqDuration, 1.5)

        option.ease = gsapAnimate.validValue(elem.dataset.iqEase, '')

        const setOption = {opacity: option.opacity, scale: option.scale, x: option.position.x, y: option.position.y, ease: option.ease, rotate: option.rotate, duration: option.duration, delay: option.delay}

        if (typeof ScrollTrigger !== typeof undefined) {
          if (elem.dataset.iqTrigger == 'scroll') {
            const scrub = elem.dataset.iqScrollScrub === 'true' ? true : false

            setOption.scrollTrigger = {
              trigger: elem,
              start: () => "top 95%",
              // end: () => "bottom 10%",
              scrub: scrub,
              markers: false
            }
          }
        }

        gsap.from(elem, setOption)

      },
      validValue: (attr, defaultVal) => {
        if (attr !== undefined && attr !== null) {
          return attr
        }
        return defaultVal
      }
    }

    const gsapElem = document.querySelectorAll('[data-iq-gsap="onStart"]')

    Array.from(gsapElem, (elem) => {
      gsapAnimate.onStart(elem)
    })
  }
  var currentImg = undefined,
  currentImgProps = {x:0, y:0},
  isZooming = false,
  column = -1,
  mouse = {x:0, y:0},
  delayedPlay;

for (var i=0; i<12; i++){
  
  if (i%4==0) column++;

  var b = document.createElement('div');    
  $('.mainBoxes').append(b);
  
  gsap.set(b, {
  attr:{ id:'b'+i, class:'photoBox pb-col'+column },
  backgroundImage:'url(./assets/images/intro/slider/banner/banner'+i+'.png)',
  backgroundSize:'cover',
  backgroundPosition:'center',
  overflow:'hidden',
  x:[60,280,500][column],
  width:400,
  height:640,
  borderRadius:20,
  scale:0.5,
  zIndex:1
  });

  b.tl = gsap.timeline({paused:true, repeat:-1})
  .fromTo(b, {y:[-575,800,800][column], rotation:-0.05}, {duration:[40,35,26][column], y:[800,-575,-575][column], rotation:0.05, ease:'none'})
  .progress(i%4/4)
}


function pauseBoxes(b){
var classStr = 'pb-col0';
if ($(b).hasClass('pb-col1')) classStr = 'pb-col1';
if ($(b).hasClass('pb-col2')) classStr = 'pb-col2';
for (var i=0; i<$('.mainBoxes').children().length; i++) {
  var b = $('.mainBoxes').children()[i];
  if ($(b).hasClass(classStr)) gsap.to(b.tl, {timeScale:0, ease:'sine'});    
}
}

function playBoxes(){ 
for (var i=0; i<$('.mainBoxes').children().length; i++) { 
  var tl = $('.mainBoxes').children()[i].tl;
  tl.play();
  gsap.to(tl, {duration:0.4, timeScale:1, ease:'sine.in', overwrite:true});
}
}


window.onload = function(){

var _tl = gsap.timeline({onStart:playBoxes})
  .set('.main',        {perspective:800})
  .set('.photoBox',    {opacity:1, cursor:'pointer'})
  .set('.mainBoxes',   {left:'65%',top:'-8%', xPercent:-50, width: '100%', rotationX:14, rotationY:-15, rotationZ:10})
  .fromTo('.main',     {autoAlpha:0},{duration:0.6, ease:'power2.inOut', autoAlpha:1}, 0.2)

$('.photoBox').on('mouseenter', function (e){   $(e.currentTarget).hasClass('pb-col0') 
  if (currentImg) return;
  if (delayedPlay) delayedPlay.kill();
  pauseBoxes(e.currentTarget);
  var _t = e.currentTarget;
  gsap.to('.photoBox', {duration:0.2,  overwrite:'auto', opacity:function(i,t){return (t==_t)? 1:0.33 }});
  gsap.fromTo(_t,      {zIndex:100}, {duration:0.2, scale:0.62, overwrite:'auto', ease:'power3'});
});  

$('.photoBox').on('mouseleave', function (e){
  if (currentImg) return;    
  var _t = e.currentTarget;
  
  if (gsap.getProperty(_t, 'scale')>0.62) delayedPlay = gsap.delayedCall(0.3, playBoxes); // to avoid jump, add delay when mouseout occurs as big image scales back down (not 100% reliable because the scale value sometimes evaluates too late)
  else playBoxes();

  gsap.timeline()
      .set(_t,         {zIndex:1})
      .to(_t,          {duration:0.3, scale:0.5, overwrite:'auto', ease:'expo'}, 0)
      .to('.photoBox', {duration:0.5, opacity:1, ease:'power2.inOut'}, 0);
});

if ( !!('ontouchstart' in window) ) { console.log('touch device!')
  mouse.x = window.innerWidth-50;
  mouse.y = 60;
}
else {
  $('.main').on('mousemove', function (e){
  mouse.x = e.x;
  mouse.y = e.layerY;
  });  
}

}
})(jQuery);
