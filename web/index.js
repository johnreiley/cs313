
let body = document.querySelector('body');
body.insertBefore(buildPageHeader(), body.firstChild);
document.querySelector('.content-container').appendChild(buildPageFooter());

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