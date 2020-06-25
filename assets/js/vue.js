// var about = new Vue({
//   el: '#about',
//   data() {
//     return {
//       title: 'TNWR',
//       items: [
//         'In the beginning there was Ian. Then there was O bruit qui court, which is a nice enough restaurant, and quickly there was a direct translation - The Noise Who Runs. Then there was all the songs for a debut The Noise Who Runs album, swiftly followed by a lot more songs, more than enough for a second The Noise Who Runs Album. Then there was an unfathomable plan to pay 200€ a month to release all those songs individually, with the spurious logic that if you make an album it\'s kind of out of date and you are writing different and more interesting things when you have to promote it. This terrible thing an album causes an artist would obviously be remedied by taking 26 existing songs and releasing individually, once a month, for just over a two-year period.',
//         'By this point, the parting of the ways across the Atlantic, there was Felipe with his guitar, and even, before Felipe, there was Gérald with his bass. And just in time for Christmas, there was Julien. And Julien came with his drumsticks and technology and the album began to be finished. And then there was Coronavirus, although everyone seems to have opted for the "COVID-19" moniker, desperate, since they are all experts enough and that they are all still "bored of experts" anyway, to demonstrate their understanding and awareness of all things in using numbers in a name to sound scientifically informed.',
//         'And then there was optimism in the initially surreal "last person on earth AND it\'s a fucking Sunday" feeling descended. Like World War One (and therefore WWII by a knock-on default really) catalysed greater equality of rights and programmes of social welfare, the global shutdown in the wake of Coronavirus would shift the window of opportunity to a wider view, more panoramic, looking forward several generations, dozens of lifetimes, and repurpose the present industries and workforces to employment specifically designed to move to a green economy and tackle and arrest the irreversible climate change that, if, as will happen, the governments of the world don\'t demand this with immediate effect, will shortly threaten every single person on the planet - it\'s just a few short years of doing nothing away.',
//         'And so there was So It Goes. And then were was a first EP planned. And songs were written or resurrected, recorded, sent back and forth via WeTransfer. And during this time, a second EP was planned as the initial surrealism of confinement became weirdly existential as you contemplated the absurdity of billions of people all being at home, more or less alone. And songs were written or resurrected, recorded, sent back and forth via WeTransfer, and here we are. This is the first release by The Noise Who Runs, and the first of three, well, let\'s call them, The Coronaviral EPs. Yes, not so very long ago, upon completion of EP1 - The First of Two Sides of a Double-headed Coin - a third EP was planned. Three are good. You can\'t do things without triangles. And three is one of the sacred magic numbers. These are 1, 3, 7, 10 and 12. Personally, I like the number 82 best of all.'
//       ],
//       gallery_images: [
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy01.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img4.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy03.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy04.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy09.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy06.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img8.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy07.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy08.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img1.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img2.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img3.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy02.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img5.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img6.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/newroxy05.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img7.jpg'
//         },
//         {
//           img: 'wp-content/themes/simple-persona/assets/images/pictures/img9.jpg'
//         }
//       ]
//     }
//   }
// });

var promo = new Vue({
  el: '#streaming',
  data() {
    return {
      stream: [
        {
          url: 'https://open.spotify.com/album/6utTQnBvsgU7sASH60SMAJ',
          logo: 'wp-content/themes/simple-persona/assets/images/icons-music/spotify.svg',
          resize: '90px'
        },
        {
          url: 'https://music.apple.com/us/album/the-first-of-two-sides-of-a-double-headed-coin-ep/1515334318?uo=4',
          logo: 'wp-content/themes/simple-persona/assets/images/icons-music/applemusic.svg',
          resize: '90px'
        },
        {
          url: 'https://thenoisewhoruns.bandcamp.com/releases',
          logo: 'wp-content/themes/simple-persona/assets/images/icons-music/bandcamp-white.svg',
          resize: '120px',
        },
        {
          url: 'https://play.google.com/store/music/album/The_Noise_Who_Runs_The_First_of_Two_Sides_of_a_Dou?id=Bn6tlcxxynwdslcikiui24opx3m',
          logo: 'wp-content/themes/simple-persona/assets/images/icons-music/google-music.svg',
          resize: '120px',
        },
        {
          url: 'https://www.deezer.com/album/150738482',
          logo: 'wp-content/themes/simple-persona/assets/images/icons-music/deezer.svg',
          resize: '90px'
        }
      ]
    }
  }
});

// var header = new Vue({
//   el: 'header',
//   data() {
//     return {
//       isHidden: false,
//       scrollPosition: null,
//       title: 'The Noise who Runs',
//       nav_links: [
//         {
//           name: 'and here we are',
//           link: 'index.html#about'
//         },
//         {
//           name: 'E.P.',
//           link: 'index.html#main_signup'
//         },
//         {
//           name: 'side projects',
//           link: 'index.html#backcatalogue'
//         }
//       ]
//     }
//   }
// })

var footer = new Vue({
  el: '#social-test',
  data() {
    return {
      title: 'TNWR',
      contacts: [
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/bandcamp.svg',
          link: 'https://thenoisewhoruns.bandcamp.com/'
        },
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/facebook.svg',
          link: 'https://www.facebook.com/thenoisewhoruns'
        },
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/instagram.svg',
          link: 'https://www.instagram.com/thenoisewhoruns'
        },
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/twitter.svg',
          link: 'https://www.twitter.com/thenoisewhoruns'
        },
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/youtube.svg',
          link: 'https://www.youtube.com/channel/UChu1eTuNuHt-q0K8L7JNS9A'
        },
        {
          icon: 'https://thenoisewhoruns/wp-content/themes/simple-persona/assets/images/social/vimeo.svg',
          link: 'https://vimeo.com/thenoisewhoruns'
        }
      ]
    }
  }
})

var footer = new Vue({
  el: '#footer',
  data() {
    return {
      title: 'TNWR',
      contacts: [
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/bandcamp.svg',
          link: 'https://thenoisewhoruns.bandcamp.com/'
        },
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/facebook.svg',
          link: 'https://www.facebook.com/thenoisewhoruns'
        },
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/instagram.svg',
          link: 'https://www.instagram.com/thenoisewhoruns'
        },
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/twitter.svg',
          link: 'https://www.instagram.com/thenoisewhoruns'
        },
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/youtube.svg',
          link: 'https://www.youtube.com/channel/UChu1eTuNuHt-q0K8L7JNS9A'
        },
        {
          icon: 'wp-content/themes/simple-persona/assets/images/social/vimeo.svg',
          link: 'https://vimeo.com/thenoisewhoruns'
        }
      ]
    }
  }
});

var backcatalogues = new Vue({
  el: '#projects',
  data() {
    return {
      name: 'test',
      backcatalogues: [
        {
          id: 1 ,
          name: 'IAN PICKERING, album \'LEFT HANDED TENDENCIES\'',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_1.jpg',
          alt: 'ian pickering album left handed tendencies',
          link: './ian-pickering-left-handed-tendencies/'
        },
        {
          id: 7 ,
          name: 'TRANSPORTER, album \'ALL THESE LINES MAKE NOISES\'',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_2.jpg',
          alt: 'TRANSPORTER ALL THESE LINES MAKE NOISES',
          link: './collaboration-transporter-album-all-these-lines-make-noises/'
        },
        {
          id: 2 ,
          name: 'SNEAKER PIMPS - album \'BECOMING X\'',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_7.jpg',
          alt: 'SNEAKER PIMPS BECOMING X',
          link: './collaboration-sneaker-pimps-album-becoming-x/'
        },
        {
          id: 3 ,
          name: 'SNEAKER PIMPS - album \'SPLINTER\' ',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_6.jpg',
          alt: 'SNEAKER PIMPS SPLINTER',
          link: './collaboration-sneaker-pimps-album-splinter'
        },
        {
          id: 4 ,
          name: 'HORRORFALL - \'Splinter\'',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_5.jpg',
          alt: 'HORRORFALL - FROM THE ALBUM L.E.D.',
          link: './collaboration-horrorfall-panic-is-like-a-light/'
        },
        {
          id: 5 ,
          name: 'VALERIE RENAY, \'speed of blue \'',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_4.jpg',
          alt: 'VALERIE RENAY (FROM THE ALBUM ‘YOUR OWN SHADOW’)',
          link: './collaboration-valerie-renay-speed-of-blue/'
        },
        {
          id: 6 ,
          name: 'SNEAKER PIMPS, album \'BLOODSPORT\' ',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_3.jpg',
          alt: 'SNEAKER PIMPS - BLOODSPORT',
          link: './collaboration-sneaker-pimps-album-bloodsport/'
        },
        {
          id: 8,
          name: 'FRONT LINE ASSEMBLY – on ALBUM ‘ECHOES’',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_8.jpg',
          alt: 'FRONT LINE ASSEMBLY – FROM THE ALBUM ‘ECHOES’',
          link: './collaboration-front-line-assembly-album-echoes/'
        },
        {
          id: 9,
          name: 'FRONT LINE ASSEMBLY – on ALBUM ‘WAKE UP THE COMA’',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_9.jpg',
          alt: 'FRONT LINE ASSEMBLY – FROM THE ALBUM ‘WAKE UP THE COMA’',
          link: './collaboration-front-line-assembly-album-wake-up-the-coma/'
        },
        {
          id: 10,
          name: 'Anomie Bell - \'Slither\'  ',
          img: 'wp-content/themes/simple-persona/assets/images/backcatalogues/backcatalogue_10.jpg',
          alt: 'Anomie Belle Slither’',
          link: './collaboration-anomie-belle-slither/'
        }
      ]
    }
  }
});

console.log('vue.js is linked');
