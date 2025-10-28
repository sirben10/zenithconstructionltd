<?php 
if (!empty($_GET['p']) && $_GET['p'] == 'services') {?>
<div class="mouse-indicator" id="cursor"></div>

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/tether.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/animsition.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/countto.js"></script>
<script src="../assets/js/equalize.min.js"></script>
<script src="../assets/js/jquery.isotope.min.js"></script>
<script src="../assets/js/owl.carousel2.thumbs.js"></script>

<script src="../assets/js/jquery.cookie.js"></script>
<script src="../assets/js/shortcodes.js"></script>
<script src="../assets/js/main.js"></script>

<!-- Revolution Slider -->
 <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
<!-- <script src="rev-slider/js/jquery.themepunch.tools.min.js"></script> -->
<script src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="rev-slider/js/extensions/revolution.extension.video.min.js"></script>
<?php } else{ ?>


  <div class="mouse-indicator" id="cursor"></div>

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/tether.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/animsition.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/countto.js"></script>
<script src="../assets/js/equalize.min.js"></script>
<script src="../assets/js/jquery.isotope.min.js"></script>
<script src="../assets/js/owl.carousel2.thumbs.js"></script>

<script src="../assets/js/jquery.cookie.js"></script>
<script src="../assets/js/shortcodes.js"></script>
<script src="../assets/js/main.js"></script>

<!-- Revolution Slider -->
<script src="../includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="../includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="../assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="../includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
<?php } ?>
<script>
  const cursor = document.getElementById('cursor');
  let mouseX = 0, mouseY = 0;
  let currentX = 0, currentY = 0;
  const smooth = parseFloat(getComputedStyle(document.documentElement)
                  .getPropertyValue('--cursor-smoothness')) || 0.18;

  document.addEventListener('mousemove', e => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  function animate() {
    currentX += (mouseX - currentX) * smooth;
    currentY += (mouseY - currentY) * smooth;
    cursor.style.transform = `translate(${currentX}px, ${currentY}px) translate(-50%, -50%)`;
    requestAnimationFrame(animate);
  }
  animate();

  // Hide cursor on hover over links and buttons
  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hidden'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hidden'));
  });

  // Optional: hide on click for ripple
  document.addEventListener('click', e => {
    cursor.classList.add('hidden');
    setTimeout(() => cursor.classList.remove('hidden'), 150);
  });
</script>