jQuery(document).ready(function () {
    if (!Array.isArray(levelThemes) || levelThemes.length === 0) {
        console.error("No themes found or an error occurred.");
        return;
    }

    // Select the container where themes will be displayed
    const container = jQuery("#themes-container");

    // Render each theme
    levelThemes.forEach((theme) => {
        const themeElement = `
            <div class="theme-item">
                <h3>${theme.name}</h3>
                <img src="${theme.screenshot_url}" alt="${theme.name}" />
                <p>${theme.description}</p>
            </div>
        `;
        container.append(themeElement);
    });
});
