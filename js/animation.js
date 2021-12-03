jQuery(document).ready(function ($) {
    var percentage_number = document.getElementById("counter");
    var img_queue = new createjs.LoadQueue();
    var preloadTl = new TimelineMax();
    var introTl = gsap.timeline({paused: true});

    img_queue.addEventListener("progress", event => {
        var preloadTl = new TimelineMax();
        var progress_percentage = Math.floor(event.progress * 100);
        percentage_number.innerHTML = progress_percentage + "%";
        // console.log("progress " + Math.floor(event.progress * 100));
            preloadTl
                .to('#counter', 4, {
                    onUpdateParams: ["{self}"],
                    onUpdate: function (tl) {
                        // tl references {self} which is the timeline
                        var tlp = progress_percentage;
                        $("#counter").html(tlp + "%");
                    }
                });
            // Animation des branches
    });
    img_queue.addEventListener("complete", event => {
        // console.log("complete " + event.progress);
        $('html').removeClass("loading");
        // Finish the preload timeline if you'd like
        preloadTl.onRepeat = function (tl) {
            preloadTl.kill();
            // or another animation or something
        }
        introTl.play();
    });
    var templateUrl = object_name.templateUrl;
    // console.log(templateUrl + "/assets/branch-hero-4.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-hero-4.svg");
    img_queue.loadFile(templateUrl + "/assets/grenade.svg");
    img_queue.loadFile(templateUrl + "/assets/logohero.svg");
    img_queue.loadFile(templateUrl + "/assets/arrow-down.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-hero-5.svg");
    img_queue.loadFile(templateUrl + "/assets/pristine-mood-title.svg");
    img_queue.loadFile(templateUrl + "/assets/quotes.svg");
    img_queue.loadFile(templateUrl + "/assets/arrow-green.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-goal.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-goal-2.svg");
    img_queue.loadFile(templateUrl + "/assets/poppy.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-canopy.svg");
    img_queue.loadFile(templateUrl + "/assets/seeding.svg");
    img_queue.loadFile(templateUrl + "/assets/budding.svg");
    img_queue.loadFile(templateUrl + "/assets/blooming.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-canopy-1.svg");
    img_queue.loadFile(templateUrl + "/assets/bg-contact.svg");
    img_queue.loadFile(templateUrl + "/assets/poppin-contact.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-contact.svg");
    img_queue.loadFile(templateUrl + "/assets/branch-contact-1.svg");
    img_queue.loadFile(templateUrl + "/assets/logofooter.svg");
    img_queue.loadFile(templateUrl + "/assets/logo-tm.svg");
    img_queue.loadFile(templateUrl + "/assets/blob-orange.svg");
    img_queue.loadFile(templateUrl + "/assets/blob-green.svg");
    img_queue.loadFile(templateUrl + "/assets/spider.gif");
    img_queue.loadFile(templateUrl + "/assets/bee.gif");
    img_queue.loadFile(templateUrl + "/assets/bg-footer-hero.png");
    img_queue.loadFile(templateUrl + "/assets/education.png");
    img_queue.loadFile(templateUrl + "/assets/collaborative.png");
    img_queue.loadFile(templateUrl + "/assets/fish.png");
    img_queue.loadFile(templateUrl + "/assets/whale.png");
    img_queue.loadFile(templateUrl + "/assets/panthere.png");
    img_queue.loadFile(templateUrl + "/assets/bee-contact.png");
    img_queue.loadFile(templateUrl + "/assets/bg_hero-1.png");
    
    introTl.from('.heroWrapper', 1, {
        autoAlpha: 0,
    })
    introTl
        .staggerFrom('.heroWrapper-branch img', 1, {
            autoAlpha: 0,
            rotation: 60, 
            transformOrigin: "left center",
            scale:-1,
            ease:Expo.easeOut
        },0.1);
    
    introTl.fromTo('.heroWrapper-branch.branch-1 img', 4, {
        rotation: 0
    }, {
        rotation: 2,
        transformOrigin: "left center",
        repeat: -1, 
        yoyo: true, 
    }, 2);
     introTl.fromTo('.heroWrapper-branch.branch-2 img', 6, {
         rotation: 0,
         x:0
     }, {
         rotation: 2,
         transformOrigin: "left center",
         x:2,
         repeat: -1,
         yoyo: true,
     },1);
      introTl.fromTo('.heroWrapper-branch.branch-3 img', 6, {
          rotation: 0,
          y: 0
      }, {
          rotation: 2,
          transformOrigin: "left center",
          y: 2,
          repeat: -1,
          yoyo: true,
      }, 1);

    //   aniamtion du logo

    introTl.from('.heroContent-logo', 1,{
        autoAlpha:0,
        y : 20
    }, 0.7)
    // aniamtion du titre
    introTl.staggerFrom('.heroContent h1 span', 1, {
        autoAlpha: 0,
        y: 20
    }, 0.8);

    introTl.staggerFrom('.heroContent-scroll', 1, {
        autoAlpha: 0,
    }, 0.8);

    //
    // ------------ window load ---------------------//
    //

    $(window).on("load", function (e) {
        // intro hero
        // subhero
        let subHero = gsap.timeline();
        subHero.set('.heroWrapper-branch.branch-5 img', {
            scale: 0
        });
        subHero.fromTo('.subHeroWrapper h2', 0.5, {
            opacity:0,
            y:-50
        }, {
            opacity:1,
            y:-0,
            ease:Power1.easeOut
        }, 0.5);
        subHero.fromTo('.subHeroWrapper p', 0.5, {
            opacity: 0,
            y: 20
        }, {
            opacity: 1,
            y: -0,
            ease: Power1.easeOut
        });
        subHero.fromTo('.heroWrapper-branch.branch-5 img', 0.8, {
            autoAlpha: 0,
            rotation: 60,
            transformOrigin: "left center",
            scale: -1,
            ease: Expo.easeOut
        },
        {
            autoAlpha: 1,
            rotation: 0,
            transformOrigin: "left center",
            scale: 1,
            ease: Expo.easeOut
        });
        ScrollTrigger.create({
            animation: subHero,
            scrub: false,
            trigger: '.subHeroWrapper',
            start: "top bottom",
            end: "bottom top",
        });
        // goals
        let goals = gsap.timeline();
        
        goals.from('.goalCollaborative .image', 1, {
            autoAlpha:0,
            y:-100,
            ease: Expo.easeOut,
        },1);
        goals.from('.goalEducation .image', 1, {
            autoAlpha: 0,
            x: -100,
            ease: Expo.easeOut,
        }, 1.3)
        goals.from('.goalEducation-title .line span', 0.5, {
            y:120,
            ease: "power4.out",
            delay: 1,
            skewY: 7,
            stagger: {
                amount: 0.3
            },
        }, -0.5)
        goals.from('.goalEducation-content .text', 2, {
            autoAlpha: 0,
            // x: 100,
            ease: Expo.easeOut,
        }, 1.8)
        goals.from('.goalCollaborative .text', 2, {
            autoAlpha: 0,
            // y: 100,
            ease: Expo.easeOut,
        }, 1.8)
        // spider
        goals.to(".goalWrapper .spider img", {
            motionPath: {
                path: "#orbit_spider",
                align: "#orbit_spider",
                alignOrigin: [0.5, 0.5],
                // autoRotate: true
            },
            transformOrigin: "50% 50%",
            duration: 15,
            repeat: -1,
            ease: "power1.inOut"
        },0.5);
        // bee
        gsap.set(".goalWrapper .bee", {y:-30});
        goals.to(".goalWrapper .bee img", {
            motionPath: {
                path: "#fly_bee",
                align: "#fly_bee",
                alignOrigin: [0.5, 0.5]
                // autoRotate: true
            },
            duration: 35,
            repeat:-1,
            ease: "power1.inOut"
        },-1.5);
        goals.from(".goalWrapper .branch", 1, {
            autoAlpha: 0,
            rotation: 60,
            transformOrigin: "left center",
            scale: -1,
            ease: Expo.easeOut
            }, 0.9);
         goals.from(".goalWrapper .branch-2", 1,{
             autoAlpha: 0,
             rotation: 60,
             transformOrigin: "right center",
             scale: -1,
             ease: Expo.easeOut
         }, 0.5);
        ScrollTrigger.create({
            animation: goals,
            scrub: false,
            trigger: '.goalWrapper',
            start: "top bottom",
            end: "bottom top",
        });

        let collectively = gsap.timeline();
        collectively.from('.collectivelyWrapper .fish img', 0.5,{
            autoAlpha:0,
            skewX : 5,
            rotation: 20,
            x: -100,
        })
        let grids = document.querySelectorAll('.collectivelyContainer div');
        gsap.utils.toArray(grids).forEach(grid => {
            collectively.from(grid, 1.5, {
                autoAlpha:0,
                y:20,
                ease: Expo.easeOut,
                delay: 0.5
            },0.3)
        });
        ScrollTrigger.create({
            animation: collectively,
            scrub: false,
            trigger: '.collectivelyWrapper',
            start: "5% bottom",
            end: "bottom top",
        });
        // Canopy
        let canopy = gsap.timeline();
        canopy.from('.canopyWrapper .poppy', 0.5, {
            autoAlpha: 0,
            skewX: 5,
            rotation: 20,
            scale:-1,
            x: -100,
        })
         canopy.from('.canopyWrapper .branch', 0.5, {
             autoAlpha: 0,
             rotation: 20,
             x: -40,
             scale: 0,
            transformOrigin: "right center",
         }, 1.5)
         canopy.from('.canopyWrapper .whale', 0.5, {
             autoAlpha: 0,
             x:-20
         }, 1.3)
         canopy.from('.canopyWrapper .panthere', 0.5, {
             autoAlpha: 0,
             x: -20
         }, 3.5)
        
        ScrollTrigger.create({
            animation: canopy,
            scrub: false,
            trigger: '.canopyWrapper',
            start: "top bottom",
            end: "bottom top",
        });

       // Canopy container
       let canopyContainer = gsap.timeline();
       canopyContainer.staggerFrom('.canopyContainer .canopyTitle h2', 0.5, {
           autoAlpha: 0,
           y: 10,
           ease: Power2.easeInOut
       }, 0.5)
       canopyContainer.staggerFrom('.canopyContainer .canopyTitle p', 0.5, {
           autoAlpha: 0,
           y: 10,
           ease: Power2.easeInOut
       }, 0.8)
       canopyContainer.staggerFrom('.canopyContainer .canopyContent div', 0.5, {
           autoAlpha: 0,
           y: 10,
           ease : Power2.easeInOut,
           stagger: 0.5
       }, 2.5)
        canopyContainer.from('.canopyWrapper .branch-1', 0.5, {
            autoAlpha: 0,
            rotation: 20,
            x: -40,
            scale: 0,
            transformOrigin: "left center",
        },4)

       ScrollTrigger.create({
           animation: canopyContainer,
           scrub: false,
           trigger: '.canopyContainer',
           start: "top bottom",
           end: "bottom top",
       });



    //    Contact
       let contact = gsap.timeline();
       
       contact.from('.contactWrapper .contactTitle', 0.5, {
           autoAlpha: 0,
           y: -20
       }, 0.3)
       contact.from('.contactWrapper .contactContent', 0.5, {
           autoAlpha: 0,
           y: -20
       }, 0.6)
       contact.from('.contactWrapper .beeContact', 0.5, {
           autoAlpha: 0,
           y: 50,
           delay: 1.5
       }, 0.8)
       contact.staggerFrom('.contactWrapper .poppin', 0.5, {
           autoAlpha: 0,
           y: 10,
           ease: Power2.easeInOut
       }, 1)
       contact.from('.contactWrapper .branch', 0.5, {
           autoAlpha: 0,
           rotation: 20,
           x: -40,
           scale: 0,
           transformOrigin: "left center",
       }, 2)
       contact.from('.contactWrapper .branch-1', 0.5, {
           autoAlpha: 0,
           rotation: 20,
           x: -40,
           scale: 0,
           transformOrigin: "right center",
       }, 2.3)

       ScrollTrigger.create({
           animation: contact,
           scrub: false,
           trigger: '.contactWrapper',
           start: "20% bottom",
           end: "bottom top",
       });

    });
});
