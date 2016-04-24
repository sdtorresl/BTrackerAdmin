<div class="stats index white-bg z-depth-3">
	<div class="card-panel grey darken-4">
		<h1><?= __('Stats') ?></h1>
	</div>
	<div class="wrapper">

		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="visits/entrance_rate" class="clean-link">
						<!-- <i class="material-icons large">equalizer</i> -->
						<?= $this->Html->image('rate_entrance.svg', ['alt' => 'Rate of entrance', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('See who went inside your store') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="visits/permanency" class="clean-link">
						<?= $this->Html->image('time_zone.svg', ['alt' => 'Zone time', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Permanency time by zone') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="visits/permanency_by_store" class="clean-link">
						<?= $this->Html->image('time.svg', ['alt' => 'Store time', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Permanency tyme by stores') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="visits/zones" class="clean-link">
						<?= $this->Html->image('zones.svg', ['alt' => 'Visited zones', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Watch visited zones') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="stores/visits" class="clean-link">
						<?= $this->Html->image('store.svg', ['alt' => 'Visits by store', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Watch visits by store') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="purchases" class="clean-link">
						<?= $this->Html->image('products.svg', ['alt' => 'Products', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Total purchases') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="purchases/byzone" class="clean-link">
						<?= $this->Html->image('zones.svg', ['alt' => 'Zones', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Purchases by zone') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="products/preferences" class="clean-link">
						<?= $this->Html->image('customer_preferences.svg', ['alt' => 'Customer preferences', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Customer preferences') ?></div>
					</a>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card-panel cyan darken-4 center-align">
					<a href="visits" class="clean-link">
						<?= $this->Html->image('prefered_products.svg', ['alt' => 'Products prefered', 'class' => 'icon']) ?>
						<div class="white-text"><?= __('Products prefered') ?></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>