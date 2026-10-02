
  document.addEventListener('contextmenu', (event) => {
    event.preventDefault();
  });

        const openBtn = document.getElementById('openBtn');
        const closeBtn = document.getElementById('closeBtn');
        const slidebar = document.getElementById('slidebar');
        const overlay = document.getElementById('overlay');

        openBtn.addEventListener('click', () => {
            slidebar.classList.add('active');
            overlay.classList.add('active');
        });

        const closeSlidebar = () => {
            slidebar.classList.remove('active');
            overlay.classList.remove('active');
        };

        closeBtn.addEventListener('click', closeSlidebar);
        overlay.addEventListener('click', closeSlidebar);

        const toggleBtn = document.querySelector('.sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');
        const mainContent = document.querySelector('.maincontent');

        toggleBtn.addEventListener('click', () => {
          sidebar.classList.toggle('active');
        });
        
