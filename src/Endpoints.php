<?php namespace LexiSmith\LaravelAlchemy;


class Endpoints
{
	
		// stores endpoints
		private $_ENDPOINTS;

	
		public function __construct()  
		{
				//Initialize the API Endpoints 
				$this->_ENDPOINTS['emotion']['text'] = '/text/TextGetEmotion';
				$this->_ENDPOINTS['emotion']['url'] = '/url/URLGetEmotion';
				$this->_ENDPOINTS['emotion']['html'] = '/html/HTMLGetEmotion';
			
				$this->_ENDPOINTS['sentiment']['url'] = '/url/URLGetTextSentiment';
				$this->_ENDPOINTS['sentiment']['text'] = '/text/TextGetTextSentiment';
				$this->_ENDPOINTS['sentiment']['html'] = '/html/HTMLGetTextSentiment';

				$this->_ENDPOINTS['sentiment_targeted']['url'] = '/url/URLGetTargetedSentiment';
				$this->_ENDPOINTS['sentiment_targeted']['text'] = '/text/TextGetTargetedSentiment';
				$this->_ENDPOINTS['sentiment_targeted']['html'] = '/html/HTMLGetTargetedSentiment';

				$this->_ENDPOINTS['author']['url'] = '/url/URLGetAuthor';
				$this->_ENDPOINTS['author']['html'] = '/html/HTMLGetAuthor';

				$this->_ENDPOINTS['keywords']['url'] = '/url/URLGetRankedKeywords';
				$this->_ENDPOINTS['keywords']['text'] = '/text/TextGetRankedKeywords';
				$this->_ENDPOINTS['keywords']['html'] = '/html/HTMLGetRankedKeywords';

				$this->_ENDPOINTS['concepts']['url'] = '/url/URLGetRankedConcepts';
				$this->_ENDPOINTS['concepts']['text'] = '/text/TextGetRankedConcepts';
				$this->_ENDPOINTS['concepts']['html'] = '/html/HTMLGetRankedConcepts';

				$this->_ENDPOINTS['entities']['url'] = '/url/URLGetRankedNamedEntities';
				$this->_ENDPOINTS['entities']['text'] = '/text/TextGetRankedNamedEntities';
				$this->_ENDPOINTS['entities']['html'] = '/html/HTMLGetRankedNamedEntities';

				$this->_ENDPOINTS['category']['url']  = '/url/URLGetCategory';
				$this->_ENDPOINTS['category']['text'] = '/text/TextGetCategory';
				$this->_ENDPOINTS['category']['html'] = '/html/HTMLGetCategory';

				$this->_ENDPOINTS['relations']['url']  = '/url/URLGetRelations';
				$this->_ENDPOINTS['relations']['text'] = '/text/TextGetRelations';
				$this->_ENDPOINTS['relations']['html'] = '/html/HTMLGetRelations';

				$this->_ENDPOINTS['language']['url']  = '/url/URLGetLanguage';
				$this->_ENDPOINTS['language']['text'] = '/text/TextGetLanguage';
				$this->_ENDPOINTS['language']['html'] = '/html/HTMLGetLanguage';

				$this->_ENDPOINTS['text']['url']  = '/url/URLGetText';
				$this->_ENDPOINTS['text']['html'] = '/html/HTMLGetText';

				$this->_ENDPOINTS['text_raw']['url']  = '/url/URLGetRawText';
				$this->_ENDPOINTS['text_raw']['html'] = '/html/HTMLGetRawText';

				$this->_ENDPOINTS['title']['url']  = '/url/URLGetTitle';
				$this->_ENDPOINTS['title']['html'] = '/html/HTMLGetTitle';

				$this->_ENDPOINTS['feeds']['url']  = '/url/URLGetFeedLinks';
				$this->_ENDPOINTS['feeds']['html'] = '/html/HTMLGetFeedLinks';

				$this->_ENDPOINTS['microformats']['url']  = '/url/URLGetMicroformatData';
				$this->_ENDPOINTS['microformats']['html'] = '/html/HTMLGetMicroformatData';

				$this->_ENDPOINTS['combined']['url'] = '/url/URLGetCombinedData';
				$this->_ENDPOINTS['combined']['text'] = '/text/TextGetCombinedData';

				$this->_ENDPOINTS['image']['url'] = '/url/URLGetImage';
				$this->_ENDPOINTS['image_keywords']['url'] = '/url/URLGetRankedImageKeywords';
				$this->_ENDPOINTS['image_keywords']['image'] = '/image/ImageGetRankedImageKeywords';

				$this->_ENDPOINTS['taxonomy']['url'] = '/url/URLGetRankedTaxonomy';
				$this->_ENDPOINTS['taxonomy']['html'] = '/html/HTMLGetRankedTaxonomy';
				$this->_ENDPOINTS['taxonomy']['text'] = '/text/TextGetRankedTaxonomy';
			
		}
	
		public function get()
		{
				return $this->_ENDPOINTS;
		}
}