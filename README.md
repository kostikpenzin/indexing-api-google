# Indexing api google

[![Latest Stable Version](https://poser.pugx.org/kostikpenzin/indexing-api-google/v/stable)](https://packagist.org/packages/kostikpenzin/indexing-api-google)
[![Total Downloads](https://poser.pugx.org/kostikpenzin/indexing-api-google/downloads)](https://packagist.org/packages/kostikpenzin/indexing-api-google)
[![Latest Unstable Version](https://poser.pugx.org/kostikpenzin/indexing-api-google/v/unstable)](https://packagist.org/packages/kostikpenzin/indexing-api-google)
[![License](https://poser.pugx.org/kostikpenzin/indexing-api-google/license)](https://packagist.org/packages/kostikpenzin/indexing-api-google)
[![Monthly Downloads](https://poser.pugx.org/kostikpenzin/indexing-api-google/d/monthly)](https://packagist.org/packages/kostikpenzin/indexing-api-google)


The Indexing API allows any site owner to directly notify Google when pages are added or removed. This allows Google to schedule pages for a fresh crawl, which can lead to higher quality user traffic. For websites with many short-lived pages like job postings or livestream videos, the Indexing API keeps content fresh in search results because it allows updates to be pushed individually.

Here are some of the things you can do with the Indexing API:

- Update a URL: Notify Google of a new URL to crawl or that content at a previously-submitted URL has been updated.
- Remove a URL: After you delete a page from your servers, notify Google so that we can remove the page from our index and so that we don't attempt to crawl the URL again.

Before you can start using the Indexing API, there are a few things you need to do, if you haven't done them already:

- Create a project for your client
- Create a service account
- Add your service account as a site owner
- Get an access token
