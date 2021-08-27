/*Gsap works like movie edit by creating different timelines to the play*/
const timeline = gsap.timeline({paused: true}) //used to pause or create delay
const container = document.querySelector('.container')
const container2 = document.querySelector('.container2')
// to(container,object)
timeline.to(container,{clipPath:'polygon(7% 7%,25% 75%,93% 93%,7% 93%)'})
timeline.to(container,{clipPath:'polygon(93% 7%,  93% 7%, 93% 93%, 93% 93%)'},'+=1') //+=1  is a time function will start after ie 1s
//creating a timeline by using an element
timeline.to('h1',{color:'white'},'+=.5')

//scaling up container two that we reduced in sass

timeline.to(container2,{clipPath:'polygon(0 0,100% 0,100% 100%,0 100%)'},'-=.3') //making transition start earlier

container.addEventListener('mouseover',()=>{
    timeline.play()

})

