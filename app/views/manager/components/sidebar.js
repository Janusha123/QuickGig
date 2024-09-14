function createSidebar(items) {
    const sidebar = document.getElementById('sidebar');

    const sidebarHTML = `
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <h2>QuickGig</h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    ${items.map(item => `
                        <li>
                            <a href="${item.href}">
                                <i class="icon">
                                    <img src="${item.icon}" alt="${item.text}">
                                </i>
                                ${item.text}
                            </a>
                        </li>
                    `).join('')}
                </ul>
            </nav>
            <div class="settings">
                <ul>
                    <li>
                        <a href="#settings">
                            <i class="icon">⚙️</i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="https://via.placeholder.com/40" alt="Profile Picture">
                <div class="profile-info">
                    <p class="name">Maria Kelly</p>
                    <p class="email">mariakelly@email.com</p>
                </div>
            </div>
        </div>
    `;

    sidebar.innerHTML = sidebarHTML;
}


/*for now some placeholder data is inserted*/