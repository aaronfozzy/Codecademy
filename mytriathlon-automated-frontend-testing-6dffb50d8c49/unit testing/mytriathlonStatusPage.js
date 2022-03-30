var casper = require('casper').create();
casper.start('http://testingframework.local/wetsuithire.php');

casper.thenOpen('http://testingframework.local/wetsuithire.php', function() {
	if (this.exists('img.mytriathlon-logo')) {
		this.echo('the img.mytriathlon-logo exists');
	}

	else
{
	  this.echo('the img.mytriathlon-logo does not exist');
}
});



casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('div.status-websites')) {
		this.echo('the div.status-websites exists');
	}

	else
{
	  this.echo('the div.status-websites does not exist');
}
});


casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('section.header')) {
		this.echo('the section.header exists');
	}

	else
{
	  this.echo('the header does not exist');
}
});


casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('section.header')) {
		this.echo('the section.header exists');
	}

	else
{
	  this.echo('the section.header not exist');
}
});

casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('section.main')) {
		this.echo('section.main exists');
	}

	else
{
	  this.echo('the section.main not exist');
}
});

casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('section.footer')) {
		this.echo('section.footer exists');
	}

	else
{
	  this.echo('the section.footer does not exist');
}
});


casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('h1.history-tests')) {
		this.echo('h1.history-tests exists');
	}

	else
{
	  this.echo('the h1.history-tests does not exist');
}
});


casper.thenOpen('http://testingframework.local/mytriathlon.php', function() {
	if (this.exists('table.history-table')) {
		this.echo('table.history-tables');
	}

	else
{
	  this.echo('the table.history-table does not exist');
}
})
casper.run();