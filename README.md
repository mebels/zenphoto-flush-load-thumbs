# zenphoto-flush-load-thumbs
Load the thumbs in album and image pages with PHP flush.


With PHP flush browsers do not wait until all the data on a web page has been transmitted to display them. PHP flush already shows parts that have already been transferred - it shows in the browser how the web page will gradually load all content until it is complete. The contents of a web page are thus displayed in batches during the data transfer.

For albums with a lot of thumbnails, this is very advisable, because otherwise the website visitor has to wait a long time for all thumbs to load before anything is displayed. With PHP flush, the content is gradually displayed to the point of completeness. Thumbs appear gradually even during the data transmission.

The PHP code can be integrated into any theme.
