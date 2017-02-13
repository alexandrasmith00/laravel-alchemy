# Alchemy API Service Provider for Laravel 5

This is a [Laravel](http://laravel.com/) service provider for making it easy to include the 
[Alchemy API for PHP](https://github.com/AlchemyAPI/alchemyapi_php) in a Laravel application.


## Installation

The Alchemy Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`lexismith/laravel-alchemy` package in your project's `composer.json`.

```json
	{
		"require": {
			"lexismith/laravel-alchemy": "dev-master"
		}
	}
```

Then run a composer update
```sh
php composer.phar update
```

To use the Alchemy Service Provider, you must register the provider when bootstrapping your Laravel application.

Find the `providers` key in your `config/app.php` and register the service provider.

```php
    'providers' => array(
        // ...
    		'LexiSmith\LaravelAlchemy\AlchemyServiceProvider',
    )
```

    	

Find the `aliases` key in your `config/app.php` and add the Alchemy facade alias.

```php
    'aliases' => array(
        // ...
        'Alchemy' 	=> 'LexiSmith\LaravelAlchemy\AlchemyFacade',
    )
```

## Configuration

By default, the package uses the following environment variables to auto-configure the plugin without modification:
```
API_KEY
BASE_URL
```

To customize the configuration file, publish the package configuration using Artisan.

```sh
php artisan vendor:publish
```

Update your settings in the generated `app/config/alchemy.php` configuration file or by editing your environment variables accordingly in  `.env`

```php
return [
		'url' => env('ALCHEMY_URL', 'http://access.alchemyapi.com/calls'),
		'key' => env('ALCHEMY_API_KEY')
];
```

## Usage

All functions accept three parameters:
1.  `$flavor` that describes the type of content being passed.  For each function, the options for `$flavor` are given.
2. `$data` that is given in the form of the `$flavor`.
3.  `$options` that specify options for each specific function, as described below.


#### Emotion

Tags the concepts for test, a URL, or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#emotion_analysis).

```
	$emotions = Alchemy::emotion($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	maxRetrieve -> the maximum number of concepts to retrieve (default: 8)
+ linkedData -> include linked data, 0: disabled, 1: enabled (default)
+	showSourceText -> 0:disabled (default), 1: enabled

#### Entities

Extracts the entities for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#entities).

```
	$emotions = Alchemy::entities($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	disambiguate -> disambiguate entities (i.e. Apple the company vs. apple the fruit). 0: disabled, 1: enabled (default)
+	linkedData -> include linked data on disambiguated entities. 0: disabled, 1: enabled (default) 
+	coreference -> resolve coreferences (i.e. the pronouns that correspond to named entities). 0: disabled, 1: enabled (default)
+	quotations -> extract quotations by entities. 0: disabled (default), 1: enabled.
+	sentiment -> analyze sentiment for each entity. 0: disabled (default), 1: enabled. Requires 1 additional API transction if enabled.
+	showSourceText -> 0: disabled (default), 1: enabled 
+	maxRetrieve -> the maximum number of entities to retrieve (default: 50)

#### Keywords

Extracts the keywords for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#keywords).

```
	$emotions = Alchemy::keywords($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	keywordExtractMode -> normal (default), strict
+	sentiment -> analyze sentiment for each keyword. 0: disabled (default), 1: enabled. Requires 1 additional API transaction if enabled.
+	showSourceText -> 0: disabled (default), 1: enabled.
+	maxRetrieve -> the max number of keywords returned (default: 50)


#### Concepts

Tags the concepts for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#concepts).

```
	$emotions = Alchemy::keywords($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	maxRetrieve -> the maximum number of concepts to retrieve (default: 8)
+	linkedData -> include linked data, 0: disabled, 1: enabled (default)
+	showSourceText -> 0:disabled (default), 1: enabled


#### Sentiment

Calculates the sentiment for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#sentiment).

```
	$emotions = Alchemy::sentiment($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ showSourceText -> 0: disabled (default), 1: enabled


#### Targeted Sentiment

Analyzes sentiment for targeted phrases via text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#targeted_sentiment).

```
	$emotions = Alchemy::sentiment_targeted($flavor, $data, $target, $options);
```
Additional input:
+ target -> the word or phrase to run sentiment analysis on.

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ showSourceText -> 0: disabled (default), 1: enabled


#### Cleaned Text

Extracts the cleaned text (removes ads, navigation, etc.) for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#text_cleaned).

```
	$emotions = Alchemy::text($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	useMetadata -> utilize meta description data, 0: disabled, 1: enabled (default)
+	extractLinks -> include links, 0: disabled (default), 1: enabled.


#### Raw Text

Extracts the raw text (includes ads, navigation, etc.) for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#text_raw).

```
	$emotions = Alchemy::text_raw($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ none


#### Author

Extracts the author from URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#authors).

```
	$emotions = Alchemy::author($flavor, $data, $options);
```

Available flavors: 
+ `'html'`
+ `'url'`

Available options:
+ none

#### Language Detection

Detects the language for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#language).

```
	$emotions = Alchemy::language($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ none


#### Title

Extracts the title for a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#title_extraction).

```
	$emotions = Alchemy::title($flavor, $data, $options);
```

Available flavors: 
+ `'html'`
+ `'url'`

Available options:
+	useMetadata -> utilize title info embedded in meta data, 0: disabled, 1: enabled (default) 


#### Relations

Extracts the relations for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#relations).

```
	$emotions = Alchemy::relations($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+	sentiment -> 0: disabled (default), 1: enabled. Requires one additional API transaction if enabled.
+	keywords -> extract keywords from the subject and object. 0: disabled (default), 1: enabled. Requires one additional API transaction if enabled.
+	entities -> extract entities from the subject and object. 0: disabled (default), 1: enabled. Requires one additional API transaction if enabled.
+	requireEntities -> only extract relations that have entities. 0: disabled (default), 1: enabled.
+	sentimentExcludeEntities -> exclude full entity name in sentiment analysis. 0: disabled, 1: enabled (default)
+	disambiguate -> disambiguate entities (i.e. Apple the company vs. apple the fruit). 0: disabled, 1: enabled (default)
+	linkedData -> include linked data with disambiguated entities. 0: disabled, 1: enabled (default).
+	coreference -> resolve entity coreferences. 0: disabled, 1: enabled (default)  
+	showSourceText -> 0: disabled (default), 1: enabled.
+	maxRetrieve -> the maximum number of relations to extract (default: 50, max: 100)
		
#### Feeds

Detects the RSS/ATOM feeds for a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#feed_detection).

```
	$emotions = Alchemy::feeds($flavor, $data, $options);
```

Available flavors: 
+ `'html'`
+ `'url'`

Available options:
+ none


#### Microformats

Extracts the microformats for a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#microformats).

```
	$emotions = Alchemy::microformats($flavor, $data, $options);
```

Available flavors: 
+ `'html'`
+ `'url'`

Available options:
+ none

#### Taxonomy

Taxonomy classification operations for text, a URL or HTML.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#taxonomy).

```
	$emotions = Alchemy::taxonomy($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ showSourceText  ->  include the original 'source text' the taxonomy categories were extracted from within the API response. 1: enabled, 0: disabled (default) 
+ sourceText -> where to obtain the text that will be processed by this API call.
--* cleaned_or_raw  : cleaning enabled, fallback to raw when cleaning produces no text (default)
--* cleaned         : operate on 'cleaned' web page text (web page cleaning enabled)
--* raw             : operate on raw web page text (web page cleaning disabled)
--* cquery          : operate on the results of a visual constraints query. Note: The 'cquery' http argument must also be set to a valid visual constraints query.
--* xpath           : operate on the results of an XPath query. Note: The 'xpath' http argument must also be set to a valid XPath query.
+ cquery -> a visual constraints query to apply to the web page.
+ xpath -> an XPath query to apply to the web page.
+ baseUrl -> rel-tag output base http url (must be uri-argument encoded)


#### Combined Calls

Combined call for entity, keyword, title, author, taxonomy.  For more information, please refer to [the overview](https://www.ibm.com/watson/developercloud/doc/alchemylanguage/) or [the docs](https://www.ibm.com/watson/developercloud/alchemy-language/api/v1/#combined-call).

```
	$emotions = Alchemy::combined($flavor, $data, $options);
```

Available flavors: 
+ `'text'`
+ `'html'`
+ `'url'`

Available options:
+ extract ->  Possible values: entity, keyword, title, author, taxonomy (default: entity, keyword, taxonomy,  concept)
+ disambiguate -> disambiguate detected entities. 1: enabled (default), 0: disabled
+ linkedData -> include Linked Data content links with disambiguated entities. 1: enabled (default), 0: disabled
+ coreference -> resolve he/she/etc coreferences into detected entities. 1: enabled (default), 0: disabled
+ quotations -> enable quotations extraction. 1: enabled, 0: disabled (default)
+ sentiment ->enable entity-level sentiment analysis. 1: enabled, 0: disabled (default)
+ showSourceText ->  include the original 'source text' the entities were extracted from within the API response. 1: enabled, 0: disabled (default)
+ maxRetrieve -> maximum number of named entities to extract. default : 50
+ baseUrl ->  rel-tag output base http url
		    
## Links
* [Alchemy language](https://www.ibm.com/watson/developercloud/alchemy-language.html)
* [Alchemy API for PHP](https://github.com/AlchemyAPI/alchemyapi_php)
* [Laravel website](http://laravel.com/)
* [License](http://aws.amazon.com/apache2.0/)