<?php 
include  'lib/bones.php' ;
get ('/', function ($app)
{echo "home" ;} );
get ('/signup', function($app)
{echo "signup!";
});
