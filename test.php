<?php 
require 'lib/aws/vendor/autoload.php';
use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
$s3Client = new S3Client([
	'version'     => 'latest',
	'region'      => 'ap-south-1',
	'credentials' => array(
		'key' => 'AKIA4MNYJAK2MBSCZQWI',
		'secret'  => '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',
	)
]);
$bucketObject = $s3Client->listObjects([
	'Bucket' => 'dishabengalimovie',
]);
$s3ObjectDishaMovie = [];
foreach ($bucketObject['Contents'] as $key => $value) {
	$cmd = $s3Client->getCommand('GetObject', [
		'Bucket' => 'dishabengalimovie',
		'Key'    => $value['Key']
	]);
	$request = $s3Client->createPresignedRequest($cmd, '+20 minutes');
	$s3ObjectDishaMovie[$value['Key']] = (string) $request->getUri();
}
echo "<pre>";
print_r ($s3ObjectDishaMovie);
echo "</pre>";
?>

<!-- <img src="<?php echo $signedUrl; ?>"> -->