<script type="text/javascript">

    jQuery(document).ready(function($) {		

        $('#editnpublish-quote').click(function(e) {

            $('#quote-html').html("<div class='field-container'><span class='ser-head'>Select Services</span><select id='services' name='services' onchange='getservicequote(this)'><option value=''>Please Select Service</option><option>Editing</option><option>Proofreading</option></select></div> ");

        });		 

		});

		function gotoenp(id){

		jQuery(document).ready(function($) {

		var url='http://www.editnpublish.com/plugin/process.php';			

    var form = $('<form action="' + url + '" name="formenp" method="post">' +

'<input type="hidden" name="data" value="'+ id +'" />'+

'</form>');   

$('body').append(form);

$(form).submit();    

        });    	

			}

    function getservicequote(selectval){

		jQuery(document).ready(function($) {

		var service = $(selectval).val();

		var wordcount= $('.word-count').first().text();

		var no_of_pages = Math.ceil(wordcount/250) ;

		var no_of_words = wordcount;

		var custom_id= $('#user_name').val() + '__' + $('#user_email').val() + '__' + $('#editnpublish_new_field').val()+ '__' + '<?=$post->guid?>' ; 

		if(service=='Editing'){

			var amnt_sixh= no_of_pages * 20;

			var amnt_12h= no_of_pages * 16; 

			var amnt_1day= no_of_pages * 14;

			var amnt_2day= no_of_pages * 12;

			var amnt_3day= no_of_pages * 10;

			var dead1 = '6 hours';

			var dead2 = '12 hours';

			var dead3 = '1 day';

			var dead4 = '2 days';

			var dead5 = '3 days';			

			$('#result_table').html('<table class="editnpublish-quotes"><thead><tr><th width="54%" class="editnpublish-ready">Deadline</th><th colspan="2" class="editnpublish-price">Price</th></tr></thead><tbody><tr class="" id="editnpublish-service-'+amnt_sixh+'"><td>6 hours</td><td width="37%">$ '+amnt_sixh+'</td><td width="9%" class="center"><input type="hidden" value="'+amnt_sixh+'" name="editnpublish_service"><input type="button" onclick="gotoenp(this.id)" id="' + custom_id + '__'+amnt_sixh +'__'+dead1+'" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr  id="editnpublish-service-'+amnt_12h+'"><td>12 hours</td><td>$ '+amnt_12h+'</td><td class="center"><input type="hidden" value="'+amnt_12h+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_12h +'__'+dead2+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_1day+'"><td>1 Day</td><td>$ '+amnt_1day+'</td><td class="center"><input type="hidden" value="'+amnt_1day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_1day +'__'+dead3+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_2day+'"><td>2 Days</td><td>$ '+amnt_2day+'</td><td class="center"><input type="hidden" value="'+amnt_2day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_2day +'__'+dead4+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_3day+'"><td>3 Days</td><td>$ '+amnt_3day+'</td><td class="center"><input type="hidden" value="'+amnt_3day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_3day +'__'+dead5+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr></tbody></table>');}

			else if(service=='Proofreading'){

				var amnt_sixh= Math.ceil(no_of_pages * 20*0.85);

			var amnt_12h= Math.ceil(no_of_pages * 16 * 0.85); 

			var amnt_1day= Math.ceil(no_of_pages * 14 * 0.85);

			var amnt_2day= Math.ceil(no_of_pages * 12 * 0.85);

			var amnt_3day= Math.ceil(no_of_pages * 10 * 0.85);

			var dead1 = '6 hours';

			var dead2 = '12 hours';

			var dead3 = '1 day';

			var dead4 = '2 days';

			var dead5 = '3 days';

			$('#result_table').html('<table class="editnpublish-quotes"><thead><tr><th width="54%" class="editnpublish-ready">Deadline</th><th colspan="2" class="editnpublish-price">Price</th></tr></thead><tbody><tr class="" id="editnpublish-service-'+amnt_sixh+'"><td>6 hours</td><td width="37%">$ '+amnt_sixh+'</td><td width="9%" class="center"><input type="hidden" value="'+amnt_sixh+'" name="editnpublish_service"><input type="button" onclick="gotoenp(this.id)" id="' + custom_id + '__'+amnt_sixh +'__'+dead1+'" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr  id="editnpublish-service-'+amnt_12h+'"><td>12 hours</td><td>$ '+amnt_12h+'</td><td class="center"><input type="hidden" value="'+amnt_12h+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_12h +'__'+dead2+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_1day+'"><td>1 Day</td><td>$ '+amnt_1day+'</td><td class="center"><input type="hidden" value="'+amnt_1day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_1day +'__'+dead3+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_2day+'"><td>2 Days</td><td>$ '+amnt_2day+'</td><td class="center"><input type="hidden" value="'+amnt_2day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_2day +'__'+dead4+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr><tr class="" id="editnpublish-service-'+amnt_3day+'"><td>3 Days</td><td>$ '+amnt_3day+'</td><td class="center"><input type="hidden" value="'+amnt_3day+'" name="editnpublish_service"><input type="button" id="' + custom_id + '__'+amnt_3day +'__'+dead5+'" onclick="gotoenp(this.id)" value="Order Now" class="order-btn" name="editnpublish_order"></td></tr></tbody></table>');

				}

		});

		}

    </script>

<?php  

$value= get_post_field('post_content', $post->ID);	

$current_user = wp_get_current_user();

	?>	

<div id="after_login">

<label for="editnpublish_new_field"> Start here to a get a quote for editing your post </label>

<input type="hidden" name="user_name" id="user_name" value="<?= esc_attr($current_user->user_firstname) ?>" />

<input type="hidden" name="user_email" id="user_email" value="<?= esc_attr($current_user->user_email) ?>" />

<input type="hidden" name="post_url" id="post_url" value="<?php echo get_permalink($post->ID); ?>" />

<input type="hidden" id="editnpublish_new_field" name="editnpublish_new_field" value= "<?=urlencode(htmlentities(strip_tags($value))) ?>"  />

<div class="logo-btn-div">

<div class="quote-btndiv">

<input name="quote" type="button" class="quote-btn" id="editnpublish-quote" value="Start">

<span class="ar"></span> </div>

</div>

<p>

<div id="quote-html" ></div>

</p>

<p>

<div id="result_table"></div>

</p>

</div>