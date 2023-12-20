document.addEventListener("DOMContentLoaded", function () {
    const urlParams = new URLSearchParams(window.location.search);
    const filterParam = urlParams.get("filter");
    
    // Dapatkan semua tombol filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Loop melalui setiap tombol filter
    filterButtons.forEach(button => {
        // Periksa apakah nilai data-filter pada tombol filter sesuai dengan filterParam
        if (button.getAttribute('data-filter') === filterParam) {
            // Jika sesuai, tambahkan kelas 'active' pada tombol tersebut
            button.classList.add('active');
        }
    });
});