<script src="<?= base_url() ?>js/jquery.min.js"></script>
	<script src="<?= base_url() ?>js/parallax.min.js"></script>
	<script>
		/*
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
		*/

		const viewprod = document.getElementById("VProducts");
  		const closeModalBtn = document.getElementById("a");
  		const overlay = document.querySelector(".overlay");
  		const prbtn = document.getElementById("prod-open");
  
		const openModal_p = function () {
		viewprod.classList.remove("hidden");
		overlay.classList.remove("hidden");
		};

		prbtn.addEventListener("click", openModal_p);

		const closeModal = function () {
		viewprod.classList.add("hidden");
		overlay.classList.add("hidden");
		};

		closeModalBtn.addEventListener("click", closeModal);
	</script>
</body>
</html>