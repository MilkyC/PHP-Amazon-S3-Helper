<?php
    //require_once('Lib/s3/S3.php');  
    class AmazonHelper{
        public $s3;

        function __construct($awsAccessKey, $awsSecretKey){
            $this->s3 = new S3($awsAccessKey, $awsSecretKey);
            $this->awsAccessKey = $awsAccessKey;
            $this->awsSecretKey = $awsSecretKey;  
        }
        function getFile($bucket, $uri, $path){
            $object = S3::getObject($bucket, $uri, $path);
            return $object;
        }
        function putFile($file, $bucket, $uri){
            if (S3::putObject($file, $bucket, $uri, S3::ACL_PRIVATE)) {
                return "File uploaded.";
            } else {
                return "Failed to upload file.";
            }
        }
        function getBucketContents($bucket_name){
            $bucket_contents = $this->s3->getBucket($bucket_name);  
            return $bucket_contents;
        }
    }