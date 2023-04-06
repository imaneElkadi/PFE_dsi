const { createApp } = Vue;

createApp({
  data() {
    return {
      cards: [
        {
          id: 1,
          title: "Hourglass",
          desc:
            "Hourglass: This body shape is characterized by a well-defined waist and balanced proportions between the upper and lower body. The bust and hips are roughly the same size, and the waist is smaller.",
          photo:
          "hourglass.jpg"
            // "https://images.unsplash.com/photo-1649011327045-624a1bd2c3e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=853&q=80"
        },
        {
          id: 2,
          title: "Rectangle",
          desc:
            "Rectangle: This body shape is characterized by a straighter, less curvy silhouette. The waist is not as well-defined, and the bust and hips are about the same size.",
          photo:
            // "https://images.unsplash.com/photo-1615529182904-14819c35db37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            "rectangle.jpg"
        },
        {
          id: 3,
          title: "Triangle or Pear",
          desc:
            "The triangle body shape, also known as the pear-shaped body, is characterized by having wider hips, thighs, and bottom, and a smaller bust and waist. This body shape is more common in women than in men, but it can occur in either gender.",
          photo:
            // "https://images.unsplash.com/flagged/photo-1588262516915-e342186ecdf6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            "triangle.jpg"
        },
        {
          id: 4,
          title: "Round or Apple",
          desc:
            "The apple body shape is characterized by having a rounder, fuller midsection and slimmer arms and legs. This body shape is more common in women than in men",
          photo:
            // "https://images.unsplash.com/flagged/photo-1588262516915-e342186ecdf6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            "apple.jpg"
        },
        {
          id: 5,
          title: "Inverted Triangle",
          desc:
            "The inverted triangle body shape is characterized by having broader shoulders and a wider upper body, with narrower hips and legs. This body shape is more common in men than in women, but it can occur in either gender. ",
          photo:
            // "https://images.unsplash.com/photo-1622372738946-62e02505feb3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=832&q=80"
            "intertriangle.jpg"
        }
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
          if (this.currentNum >= 4) {
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