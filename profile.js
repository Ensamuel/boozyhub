let course = document.getElementById('course');
let webDev = document.getElementById('web-development');
let devops = document.getElementById('devops');
let comp1 = document.getElementById('component1');
let webDev2 = document.getElementById('web-dev');
let devops2 = document.getElementById('dev-ops');
let noCourse = document.getElementById('no-course')



course.addEventListener('change', displayFunc);


function displayFunc() {

    switch (course.value) {

        case '0':
            noCourse.style.display = 'block';

            webDev.style.display = 'none';

            webDev2.style.display = 'none';

            devops.style.display = 'none';

            devops2.style.display = 'none';


            break;

        case '1':
            webDev.style.display = 'block';
            webDev2.style.display = 'block';

            noCourse.style.display = 'none';

            devops.style.display = 'none';

            devops2.style.display = 'none';

            break;

        case '2':

            devops.style.display = 'block';

            devops2.style.display = 'block';
            webDev.style.display = 'none';
            noCourse.style.display = 'none';
            webDev2.style.display = 'none';

            break;



        default:
            noCourse.style.display = 'block';

            webDev.style.display = 'none';

            noCourse.style.display = 'none';
            webDev2.style.display = 'none';
            devops.style.display = 'none';

            devops2.style.display = 'none';

            break;
    }

}

