<style>
/* CSS for preloader */
#preloader {
    position: fixed;
    left: 0;
    top: 0;
    z-index: 9999;
    width: 100%;
    height: 100%;
    background-color: #fff; /* Background color of the preloader */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; /* Hide any overflow content */
}

#status {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100px; /* Adjusted to better fit on small devices */
    height: 100px; /* Adjusted to better fit on small devices */
    position: relative;
}

.spinner {
    width: 80px; /* Adjusted size for better visibility */
    height: 80px; /* Adjusted size for better visibility */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.spinner-circle {
    width: 100%;
    height: 100%;
    border: 6px solid #00cfff; /* Border color for the circle */
    border-top: 6px solid transparent; /* Make the top border transparent to create a spinning effect */
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.spinner-text {
    position: absolute;
    font-size: 24px; /* Size of the text */
    color: #f9710e; /* Color for the text */
    font-weight: bold;
    text-align: center;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes scaleout {
    0% { transform: scale(0.0); }
    100% {
        transform: scale(1.0);
        opacity: 0;
    }
}
</style>

<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="spinner-circle"></div>
            <div class="spinner-text">
                <!--<img src="assets/images/logo/udd-logo-removebg-preview.png" alt="logo" class="changeLogo" style="max-width: 80px;">-->
                <h4>KMB</h4>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
window.onload = function() {
    setTimeout(fadeOut, 500); 
}

function fadeOut() {
    var preloader = document.getElementById('preloader');
    preloader.style.opacity = '0';
    setTimeout(function() {
        preloader.style.display = 'none';
    }, 500);
}
</script>
