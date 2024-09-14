<?php require APPROOT . '/views/inc/components/header.php'; ?>
<link rel="stylesheet" href="style.css">

<div id="sidebar"></div>  <!--sidebar-->


<div class="container">
    <div class="app-bar">
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    </div>

    <!-- Main container -->
    <div class="main-content">
        
        <h3>Good morning! Maria,</h3>

        <div class="cards" id="cards"></div>
    </div>
</div>

    <!--Js files for the components-->
<script src="./components/sidebar.js"></script>
<script src="./components/card.js"></script>
<script>
    /*Navigation list items for the sidebar*/
    const menuItems =
    [
        { href: '#dashboard', icon: '/icons/dashboard.svg', text: 'Dashboard' },
        { href: '#advertisements', icon: '/icons/advertisement.svg', text: 'Advertisements' },
    ];

    const colors = ['#4640DE', '#56CDAD', '#26A4FF', '#FFB836'];
    const numbers = [1, 2, 3, 4];
    const texts = ['Card 1', 'Card 2', 'Card 3', 'Card 4'];
    
    createCards(4, texts, colors, numbers, 110, 230);
    
    createSidebar(menuItems);

    //sidebar toggle functionality
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    }
    
</script> 
<?php require APPROOT . '/views/inc/components/footer.php'; ?>