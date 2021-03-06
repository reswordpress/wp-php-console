<?php

class AdminTestCest  {


	public function TestPluginActivationDeactivation( AcceptanceTester $I ) {

		$I->wantTo( 'See if WP PHP Console is listed in the Plugins page.' );

		$I->loginAsAdmin();
		$I->amOnPluginsPage();

		$I->seePluginInstalled( 'wp-php-console' );

		$I->wantTo( 'Deactivate and reactivate WP PHP Console.' );

		$I->deactivatePlugin( 'wp-php-console' );
		$I->seePluginDeactivated( 'wp-php-console' );
		$I->activatePlugin( 'wp-php-console' );
		$I->seePluginActivated( 'wp-php-console' );
	}


}
