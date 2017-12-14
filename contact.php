<div class="row contact top-buffer">
	<div class="col-md-4">
		<a name="contact"></a>
		<h2>LR üyeliği için bize ulaşın</h2>

		<h3>
			LR'ye üye olarak kendinize indirimli ürün alma veya sıfır riskle kendi işinizi kurma imkanına sahip
			olacaksınız.</h3>
	</div>
	<div class="col-md-4">
		<address>
			<h2>WhatsApp</h2>
			<img src="<?php echo get_bloginfo('template_url') ?>/assets/img/whatsapp.png" style="width:56px; float:left; margin-right:20px;"/>
			<p><strong>(537) 200 123 1</strong> nolu telefona WhatsApp ile erişebilirsiniz. </p>
		</address>
		<br/>
		<address>
			<h2>E-posta</h2>
			<img src="<?php echo get_bloginfo('template_url') ?>/assets/img/email.png" style="width:56px; float:left; margin-right:20px;"/>

			<p><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/posta.png" alt="e-posta"  style="width:206px; float:left; margin-right:20px;"/><br/>
				eposta adresi ile bize ulaşabilirsiniz.</p>
		</address>
		<br/>
	</div>
	<div class="col-md-4">
		<div class="contact_form">
			<h2>LR Üyelik Bilgi Formu</h2>
			<form action="https://formmailer-158022.appspot.com/feedback" method="POST" id="contact_form">
				<input name="_subject" value="Uyelik Bilgi Istegi!" type="hidden"/>
				<input name="_source" th:value="${content.uri}" type="hidden"/>
				<input type="hidden" name="_next" value="http://aloevera-network.com/thanks.html"/>
				<div class="form-group">
					<label for="app_name">Adınız Soyadınız <span class="text-danger">*</span></label>
					<input name="name" class="form-control" id="app_name" type="text" required/>
				</div>
				<div class="form-group">
					<label for="app_phone">Cep telefonunuz <span class="text-danger">*</span></label>
					<input name="phone" class="form-control contact-group" id="app_phone" type="text"/>
				</div>
				<div class="form-group">
					<label for="app_email">E-posta adresiniz</label>
					<input name="_replyto" class="form-control contact-group" id="app_email" type="email"/>
				</div>
				<div class="form-group">
					<label for="app_city">Yaşadığınız şehir</label>
					<input name="city" class="form-control contact-group" id="app_city" type="text"/>
				</div>
				<div class="form-group">
					<label for="app_msg">Mesajınız</label>
					<textarea name="mesaj" class="form-control" id="app_msg" rows="2"></textarea>
				</div>
				<input name="_gotcha" style="display:none" type="text"/>
				<button type="submit" class="btn btn-primary">BİLGİ ALMAK İSTİYORUM</button>
			</form>
		</div>
	</div>
</div>
