<?php
	
use GuzzleHttp\Client;

const GOOGLE_HIRE_URL = 'https://hire.withgoogle.com/v2/api/t/contractsimplycom/public/jobs/';
const GOOGLE_HIRE_TIMEOUT = 5.0;

//use this to get the jobs from the database
function get_google_hire_jobs()
{
	$jobs = get_option('gm_google_jobs');
	
	if(!$jobs)
		$jobs = fetch_google_hire_jobs();
		
	return $jobs;
}

//this is called via a cron each hour
function fetch_google_hire_jobs()
{
	$client = new Client([
	    'base_uri' => GOOGLE_HIRE_URL,
	    'timeout'  => GOOGLE_HIRE_TIMEOUT
	]);
	
	$response = $client->request('GET');
	$body = $response->getBody();
	$jobs = json_decode($body, true);
	
	update_option('gm_google_jobs', $jobs);
	
	return $jobs;
}

//schedule google hire jobs cron job
if(!wp_next_scheduled('fetch_google_hire_jobs_cron')):
   wp_schedule_event(time(), 'hourly', 'fetch_google_hire_jobs_cron');
endif;

add_action('fetch_google_hire_jobs_cron', 'fetch_google_hire_jobs');
