
let body = document.querySelector('body');
body.insertBefore(buildPageHeader(), body.firstChild);

/******************************************************/

function buildPageHeader() {
    let header = document.createElement('header');
    header.innerHTML = 
    `
    <nav>
        <a href="index.html" class="nav-item">Home</a>
        <div class="nav-item dropdown">
            Assignments
            <div class="dropdown-content">
                <a href="assignments-views/personal.html" class="nav-item">Personal</a>
                <a href="assignments-views/team.html" class="nav-item">Team</a>
            </div>
        </div>
    </nav>
    `;

    return header;
}