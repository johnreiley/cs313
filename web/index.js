
let body = document.querySelector('body');
document.querySelector('.content-container').appendChild(buildPageFooter());
setDropdownListener();

/******************************************************/

function buildPageHeader() {
    let header = document.createElement('header');
    header.innerHTML = 
    `
    <nav>
        <a href="index.php" class="nav-item">Home</a>
        <div class="nav-item dropdown">
            Assignments
            <div class="dropdown-content">
                <a href="personal.php" class="nav-item">Personal</a>
                <a href="team.php" class="nav-item">Team</a>
            </div>
        </div>
    </nav>
    `;

    return header;
}

function buildPageFooter() {
    let footer = document.createElement('footer');
    let year = new Date().getFullYear();
    footer.innerHTML = `John Reiley - Copyright ©${year}`;
    return footer;
}

function setDropdownListener() {
    let ddContent = document.querySelector('.dropdown-content');
    let dropdown = document.querySelector('.dropdown');
    dropdown.addEventListener('touchend', (e) => {
        ddContent.display == 'block' ? ddContent.display = 'none !important' : ddContent.display = 'block !important';
        e.preventDefault();
    })
    dropdown.addEventListener('click', () => {
        ddContent.display == 'block' ? ddContent.display = 'none !important' : ddContent.display = 'block !important';
    })
}