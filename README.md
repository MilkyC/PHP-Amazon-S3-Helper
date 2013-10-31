php-amazon-s3-helper
===========
A simple wrapper for the S3 library [amazon-s3-php-class](https://github.com/tpyo/amazon-s3-php-class)

Requirements
-----
You have to have the [Amazon S3 PHP Class](https://github.com/tpyo/amazon-s3-php-class) included in your path somewhere. This class relies on that library being there!

Usage
-----

Instantiate a new object with your aws key and secret:

	$amazonObj = new AmazonHelper($awsAccessKey, $awsSecretKey);

And then you can retrieve items from S3
    
    $obj = $amazonObj->getFile($bucketname, $path, $localPath);

And put them there:

	$res = $amazonObj->putFile(array("file"=>$fileName), $bucketname, $name_on_s3);

It can also list all the values in a given bucket:
	
	$buck_contents = $amazonObj->getBucketContents($bucketname);



Enjoy,

--Charlie
