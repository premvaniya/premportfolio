document.addEventListener('DOMContentLoaded', () => {
    const skillItems = document.querySelectorAll('.skill-item');
    
    skillItems.forEach(item => {
        item.addEventListener('click', () => {
            const skillName = item.querySelector('p').textContent;
            alert(`Explore my projects using ${skillName}!`);
            // Replace with a modal or tooltip for production use
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    // Existing skill items code
    const skillItems = document.querySelectorAll('.skill-item');
    skillItems.forEach(item => {
        item.addEventListener('click', () => {
            const skillName = item.querySelector('p').textContent;
            alert(`Explore my projects using ${skillName}!`);
        });
    });

    // Project cards interactivity
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('click', (e) => {
            // Prevent click event from triggering when clicking the link
            if (e.target.classList.contains('project-link')) return;
            const projectName = card.querySelector('h3').textContent;
            alert(`Learn more about ${projectName}!`);
            // Replace with modal or redirect to project details in production
        });
    });
});
