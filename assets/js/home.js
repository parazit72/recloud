
$(function() {
		$(".text-on-a-circle").lettering();
	});

    $(document).ready(function() {

      var owl = $(".owl-demo");

      owl.owlCarousel({

          itemsCustom : [
            [0, 1],
            [450, 2],
            [600, 3],
            [700, 4],
            [1000, 5],
          ],
          navigation : true

      });

			var owl = $("#solutions-item");

			owl.owlCarousel({

					itemsCustom : [
						[0, 1],
						[992, 7],
					],
					navigation : true

			});


    });
