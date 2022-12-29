// --------------------------------- menu burger ----------------------------- 
let menu = document.getElementById('menu');
let burger = document.getElementById('burger')

burger.addEventListener('click', function(){
    menu.classList.toggle('show');
    console.log(window)
});

menu.addEventListener('click', function(){
    menu.classList.remove('show');
})


// ------------------------------------ compétences ----------------------------- 
const competence = document.querySelectorAll('#list-competences tr td.competence span')
let competences = document.getElementById('list-competences');

// competences.addEventListener('click', function(){
//     // competence.classList.add('.animation');
//     // competence.forEach(comp => {
//     //     comp.classList.add('animation')
//     //     console.log(comp.innerHTML);
//     // });
// })

let options = {
    root: null,
    rootMargin: "-5% 0px",
    treshold: 0.2
};

function handleIntersect(entries){
    console.log(entries)

    entries.forEach(entry => {
        if(entry.isIntersecting){
            // console.log(entry.target.innerHTML)
            entry.target.classList.add('animation')
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);

competence.forEach(comp => {
   observer.observe(comp);
});