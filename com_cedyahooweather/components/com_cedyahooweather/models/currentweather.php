<?php

require JPATH_SITE . '/components/com_cedyahooweather/vendor/autoload.php';
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;


class currentweather
{

	public function getModelWithCityId($myApiKey, $cityId = 2172797)
	{
		return $this->getModel($myApiKey, $cityId);
	}

	public function getModelWithCoordinate($myApiKey, $lat = 77.73038, $long = 41.89604)
	{
		return $this->getModel($myApiKey, array('lat' => $lat, 'lon' => $long));
	}

	public function getModelWithCityName($myApiKey, $cityName)
	{
		return $this->getModel($myApiKey, $cityName);
	}

	private function getModel($myApiKey, $param)
	{
// Language of data (try your own language here!):
		$lang = 'de';

// Units (can be 'metric' or 'imperial' [default]):
		$units = 'metric';

// Get OpenWeatherMap object. Don't use caching (take a look into Example_Cache.php to see how it works).

		$model = new stdClass();

		try
		{
			$owm = new OpenWeatherMap();
			$owm->setApiKey($myApiKey);

			$weather            = $owm->getWeather($param, $units, $lang);
			$model->temperature = $weather->temperature;

			$model->temperature_formatted = $weather->temperature->getFormatted();
			$model->temperature_value     = $weather->temperature->getValue();
			$model->temperature_unit      = $weather->temperature->getUnit();

			$model->temperature_now  = $weather->temperature->now;
			$model->temperature_min  = $weather->temperature->min;
			$model->temperature_max  = $weather->temperature->max;
			$model->temperature_last = $weather->lastUpdate->format('r');
			$model->pressure         = $weather->pressure;
			$model->humidity         = $weather->humidity;

			/*
			 * These functions return a DateTime object.
			 */
			$model->sunrise = $weather->sun->rise->format('r');
			$model->sunset  = $weather->sun->set->format('r');

			$model->city_id               = $weather->city->id;
			$model->city_name             = $weather->city->name;
			$model->city_long             = $weather->city->lon;
			$model->city_lat              = $weather->city->lat;
			$model->city_country          = $weather->city->country;
			$model->city_wind_speed       = $weather->wind->speed;
			$model->city_wind_direction   = $weather->wind->direction;
			$model->city_wind_speed       = $weather->wind->speed->getDescription();
			$model->city_wind_description = $weather->wind->direction->getDescription();
			// The number in braces seems to be an indicator how cloudy the sky is.
			$model->clouds_description      = $weather->clouds->getDescription() . ' (' . $weather->clouds . ')';
			$model->precipation_description = $weather->precipitation->getDescription() . ' (' . $weather->precipitation . ')';

		}
		catch (OWMException $e)
		{
			$model->temperature = 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
		}
		catch (\Exception $e)
		{
			$model->temperature = 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
		}

		return $model;
	}

}