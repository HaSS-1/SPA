const sections = document.querySelectorAll('.section');
const sectBtns = document.querySelectorAll('.controlls');
const sectBtn = document.querySelectorAll('.control');
const allSections = document.querySelector('.main-content');


function PageTransitions() {
    //Button click active class
    for (let i = 0; i < sectBtn.length; i++) {
        sectBtn[i].addEventListener('click', function() {
            let currentBtn = document.querySelectorAll('.active-btn');
            currentBtn[0].className = currentBtn[0].className.replace('active-btn', '');
            this.className += ' active-btn';
        })
    }

    //Sctions Active 
    allSections.addEventListener('click', (e) => {
        const id = e.target.dataset.id;
        if (id) {
            //resmove selected from the other btns
            sectBtns.forEach((btn) => {
                btn.classList.remove('active')
            })
            e.target.classList.add('active')

            //hide other sections
            sections.forEach((section) => {
                section.classList.remove('active')
            })

            /* Adding the class active to the element with the id that is passed in. */
            const element = document.getElementById(id);
            element.classList.add('active');
        }
    })

    //Toggle theme
    const themeBtn = document.querySelector('.theme-btn');
    themeBtn.addEventListener('click', () => {
        let element = document.body;
        element.classList.toggle('light-mode')
    })
}

PageTransitions();

//Convert adress to google map's link:
$("address").each(function(){
    var address = $(this).text().replace(/\,/g, ' '); // get rid of commas
    var url = address.replace(/\ /g, '%20'); // convert address into approprite URI for google maps
    
    $(this).wrap('<a href="http://maps.google.com/maps?q=' + url + '" target="_blank"></a>');

});

//Preloader
$(window).on('load', function() {
    $('.loader-wrapper').delay(0).fadeOut('slow');
});

const box = document.getElementById('name');

const textDiv = document.getElementById('f-name');

// Change text color on mouseover
box.addEventListener('mouseover', function handleMouseOver() {
  textDiv.style.color = '#454e56';
});

//Change text color back on mouseout
box.addEventListener('mouseout', function handleMouseOut() {
  textDiv.style.color = '';
});