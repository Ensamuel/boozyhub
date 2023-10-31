let course = document.getElementById('course');
let webDev = document.getElementById('web-development');
let uxDes = document.getElementById('ux-design');
let comp1 = document.getElementById('component1');
let webDev2 = document.getElementById('web-dev');
let uxDes2 = document.getElementById('ux-des')
let noCourse = document.getElementById('no-course')
let cloud = document.getElementById('cloud-engineering')


course.addEventListener('change', displayFunc);


function displayFunc() {

    switch (course.value) {

        case '0':
            noCourse.style.display = 'block';
            cloud.style.display = 'none';
            webDev.style.display = 'none';
            uxDes.style.display = 'none';
            webDev2.style.display = 'none';
            uxDes2.style.display = 'none';
            
            break;

        case '1':
            webDev.style.display = 'block';
            uxDes.style.display = 'none';
            cloud.style.display = 'none';
            noCourse.style.display = 'none';
            webDev2.style.display = 'block';
            uxDes2.style.display = 'none';
            break;

        case '2':
            uxDes.style.display = 'block';
            cloud.style.display = 'none';
            webDev.style.display = 'none';
            noCourse.style.display = 'none';
            webDev2.style.display = 'none';
            uxDes2.style.display = 'block';
            break;

        case '3':
            cloud.style.display = 'block';
            webDev.style.display = 'none';
            uxDes.style.display = 'none';
            noCourse.style.display = 'none';
            webDev2.style.display = 'none';
            uxDes2.style.display = 'none';
            break;

        default:
            noCourse.style.display = 'block';
            cloud.style.display = 'none';
            webDev.style.display = 'none';
            uxDes.style.display = 'none';
            noCourse.style.display = 'none';
            webDev2.style.display = 'none';
            uxDes2.style.display = 'none';
            break;
    }

}

