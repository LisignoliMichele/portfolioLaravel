var app = new Vue(
   {
      el: "#app",
      data:{
         navbar:[
            {
               navTitle:"Home",
               list:[
                  "maxCoach Education",
                  "Course portal",
                  "Distant Learning",
                  "Multimedia Pedagory",
                  "Modern Schooling",
                  "Remote Training",
                  "Healt Coaching",
                  "Gym Coaching",
                  "Business",
               ],
               listTwo:[
                  "Artist",
                  "Kitchen Coach",
                  "Motivation",
                  "Dancing",
                  "Guitar",
                  "Yoga",
                  "Photography",
                  "Personal Finance",
                  "Business",
               ],
               image: "img/headerIMG/homepages-mega-menu-image-alt-300x129.jpg",
            },
            {
               navTitle:"Pages",
               list:[
                  "Start Here",
                  "Success Story",
                  "About me",
                  "About us 01",
                  "About us 02",
                  "About us 03",
                  "Contact me",
                  "Contact us",
                  "Purchase Guide",
                  "Private Policy",
                  "Terms of service",
               ],
               listTwo:[],
               image: ""
            },
            {
               navTitle:"Courses",
               list:[
                  "Course Grid 01",
                  "Course Grid 02",
                  "Course Grid 03",
                  "Membership Levels",
                  "Become a Teacher",
                  "Profile",
                  "Checkout",
                  "Single Layout"
               ],
               listTwo:[],
               image: ""
            },
            {
               navTitle:"Features",
               list:[
                  "Events",
                  "Zoom Meetings",
               ],
               listTwo:[],
               image: ""
            },
            {
               navTitle:"Blog",
               list:[
                  "Blog Grid",
                  "Blog Massonry",
                  "Blog Classic",
                  "Blog List",
               ],
               listTwo:[],
               image: ""
            },
            {
               navTitle:"Shop",
               list:[
                  "Shop Left Sidebar",
                  "Shop right Sidebar",
                  "Card",
                  "Whishlist",
                  "Single Product",
               ],
               listTwo:[],
               image: ""
            },
         ],
         courses: [
            {
               name: "The Acrylic Painting Academy",
               price: "18.00$",
               studentsNumb: "50",
               lessonsNumb: "4",
               image: "08",
            },
            {
               name: "Drawing and Shading: Complete Course",
               price: "21.00$",
               studentsNumb: "50",
               lessonsNumb: "14",
               image: "07",
            },
            {
               name: "The Color Theory for Digital Artist",
               price: "19.00$",
               studentsNumb: "50",
               lessonsNumb: "7",
               image: "06",
            },
            {
               name: "Ultimate Guide to Digital Sketching for Beginner",
               price: "35.00$",
               studentsNumb: "50",
               lessonsNumb: "14",
               image: "05",
            },
            {
               name: "Portrait Drawing The Smart Way",
               price: "19.00$",
               studentsNumb: "50",
               lessonsNumb: "2",
               image: "04",
            },
            {
               name: "Mastering Watercolor Painting from Beginner",
               price: "19.00$",
               studentsNumb: "50",
               lessonsNumb: "4",
               image: "03",
            },
            {
               name: "The Art & Science of Drawing",
               price: "25.00$",
               studentsNumb: "50",
               lessonsNumb: "6",
               image: "02",
            },
            {
               name: "The Colored Pencil Drawing Course",
               price: "22.00$",
               studentsNumb: "50",
               lessonsNumb: "9",
               image: "01",
            },
         ],
         testimonials:[
            {  avatar: "02",
               name: "Florence Themes",
               feedTitle: "It's a choice of quality for people with special needs",
               feed:	"I'm a very strict person so I require everything to be organized and neat. Then, I'll be able to make things right and shine. MaxCoach guys just got me.",
               job: "Multimedia Admin",
            },
            {  avatar: "04",
               name: "Mina Hollace",
               feedTitle: "High level of efficiency and scientific teaching methods",
               feed:	"I am free to learn at my own pace, follow my own schedule and choose the subject I want to learn from the syllabus. Great study portal for people like me.",
               job: "Freelancer",
            },
            {  avatar: "03",
               name: "Luvic Dubble",
               feedTitle: "The MaxCoach team works really hard to ensure high quality",
               feed:	"I am happy with their arrangement of lessons and subjects. They reflect a scientific  investigation into effective methods to be adopted for learners of all levels.",
               job: "Private Tutor",
            },
            {  avatar: "01",
               name: "Madley Pondor",
               feedTitle: "The MaxCoach team works really hard to ensure high quality",
               feed:	"I need to get a certification for English proficiency and MaxCoach is my best choice. Their tutors are smart and professional when dealing with students.",
               job: "IT Specialist",
            },
         ],
         blogsTodisplay:[
            {
               writerJOB: "ARTIST",
               title: "Brush Strokes Energize Trees in Paintings",
               date: "May 15, 2020",
               views: "917",
               poster: "artist-blog-03-480x356.jpeg"
            },
            {
               writerJOB: "ARTIST",
               title: "Connection Between Self-Portraits and Identity",
               date: "May 15, 2020",
               views: "604",
               poster: "artist-blog-02-500x680.jpg"
            },
            {
               writerJOB: "ARTIST",
               title: "Pocket-Sized Notebooks Hold Miniature Paintings",
               date: "May 15, 2020",
               views: "803",
               poster: "artist-blog-01-480x356.jpg"
            }
         ],
         events: [
            {
               poster:"04",
               date: "APR 22, 2022",
               name: "Storytelling Workshop",
               place: "Texas, US"
            },
            {
               poster:"03",
               date: "NOV 23, 2021",
               name: "International Art Fair 2021",
               place: "Hamburg, Germany"
            },
            {
               poster:"02",
               date: "OCT 10, 2021",
               name: "Painting Art Contest 2021",
               place: "New York, US"
            },
            {
               poster:"01",
               date: "DEC 15, 2021",
               name: "Street Performance:Call for Artist",
               place: "Illinois, US"
            }, 
         ],
         navIndex: null,
         visibility: '',
      },
   },
   
);

gsap.to(".bgsapAAA", {
   x: -100,
   rotation: 30,
   scrollTrigger: {
     trigger: ".bgsap_starterAAA",
     start: "top 800px",
     end: "top 20px",
     scrub: true,
     markers: false,
     id: "scrub"
   }
 });
 
 const anim = gsap.to(".bgsapBBB", {
   x: -550,
   y: 700,
   rotation: 360,
   duration: 3,
 });
 const two = gsap.to(".bgsapCCC", {
   x: -60,
   y: 10,
   rotation: 18,
   duration: 10,
 });
 const three = gsap.to(".bgsapDDD", {
   x: 30,
   y: -100,
   rotation: 10,
   duration: 10,
 });
 const four = gsap.to(".bgsapEEE", {
   x: 100,
   y: 0,
   rotation: -90,
   duration: 10,
 });
 gsap.to(".sectionQuotes", {
   x: 0,
   rotation: 360,
   scrollTrigger: {
     trigger: "bluebuttontrigger",
     start: "top -1100px",
     end: "top 100px",
     scrub: false,
     markers: false,
     id: "scrub"
   }
});
gsap.to(".greenpoisgsap", {
   x: 100,
   y: 400,
   rotation: 360,
   scrollTrigger: {
     trigger: ".blueVIDpoisgsap",
     start: "top 800px",
     end: "top 20px",
     scrub: true,
     markers: false,
     id: "scrub"
   }
});
gsap.to(".blogbluestain", {
   x: 100,
   y: -400,
   rotation: 360,
   scrollTrigger: {
     trigger: ".events",
     start: "top 600px",
     end: "top 20px",
     scrub: true,
     markers: false,
     id: "scrub"
   }
});
 
