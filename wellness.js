const { createApp } = Vue;

createApp({
  data() {
    return {
      cards: [
        {
          id: 1,
          title: "Exercise",
          desc:"Regular physical activity can help improve your physical and mental health by reducing stress,boosting mood, and improving overall fitness.",
          photo:"pics/xx1.jpeg"
        },
        {
          id: 2,
          title: "healthy diet",
          desc:"A healthy diet that includes a variety of fruits, vegetables, whole grains, lean protein, and healthy fats can help support your immune system and prevent chronic diseases.",
          photo:"pics/bgf.jpg"
        },
        {
          id: 3,
          title: "stress",
          desc: "Stress can have negative effects on both physical and mental health.Try practicing relaxation techniques such as deep breathing, meditation, or yoga.",
          photo:"pics/khz.jpg",
        },
        {
          id: 4,
          title: "hydrated",
          desc:"Drinking enough water throughout the day can help keep your body functioning properly d prevent dehydration.",
          photo: "pics/hl5.jpg"       }
      ],
      currentNum: 0
    };
  },
  computed: {
    currentCard() {
      return this.cards[this.currentNum];
    }
  },
  methods: {
    playFoward() {
      let tl = gsap.timeline({
        defaults: {
          duration: 0.7,
          ease: "sine.out"
        },
        onComplete: () => {
          this.playReverse();
          if (this.currentNum >= 3) {
            this.currentNum = 0;
          } else {
            this.currentNum++;
          }
        }
      });
      tl.to("#mask-1", {
        yPercent: 100,
        scaleY: 1.4
      })
        .to(
          "#mask-2",
          {
            yPercent: -100,
            scaleY: 1.4
          },
          "<"
        )
        .to(
          "#card-info-title",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 0%, 0% 0%)`
          },
          "<0.4"
        )
        .to(
          "#card-info-desc",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 0%, 0% 0%)`
          },
          "<0.3"
        );
    },
    playReverse() {
      let tl = gsap.timeline({
        defaults: {
          duration: 0.7,
          ease: "sine.in"
        }
      });
      tl.to("#mask-1", {
        yPercent: -100,
        scaleY: 1.4
      })
        .to(
          "#mask-2",
          {
            yPercent: 100,
            scaleY: 1.4
          },
          "<"
        )
        .to(
          "#card-info-title",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 100%, 0% 100%)`
          },
          "<0.2"
        )
        .to(
          "#card-info-desc",
          {
            clipPath: `polygon(0 0, 100% 0, 100% 100%, 0% 100%)`
          },
          "<0.3"
        );
    },
    nextCard() {
      this.playFoward();
    }
  }
}).mount("#app");