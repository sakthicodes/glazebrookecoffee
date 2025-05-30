/** @format */

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.create({
  trigger: ".coffee-jars-row",
  start: "top 80%",
  once: true,
  onEnter: () => {
    const jars = document.querySelectorAll(".coffee-jar");
    gsap.set(jars, { opacity: 0, y: 30 });
    gsap.to([jars[0], jars[4]], {
      opacity: 1,
      y: 0,
      duration: 0.6,
      delay: 0.2,
      ease: "power2.out",
    });
    gsap.to([jars[1], jars[3]], {
      opacity: 1,
      y: 0,
      duration: 0.6,
      delay: 0.7,
      ease: "power2.out",
    });
    gsap.to(jars[2], {
      opacity: 1,
      y: 0,
      duration: 0.6,
      delay: 1.2,
      ease: "power2.out",
    });
  },
});
