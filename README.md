# Rich Previews Plugin

With this plugin, you'll easily create previews for chat applications such as WhatsApp, Telegram, Skype and Facebook, LinkedIn and Google+ social networks.

The Rich Previews usually generated realtime by visiting your website through reading your meta tags from the HTML source of your page.

You can generate preview for each page and also in a dynamic way, for this you need:

* Define the 'url' of the website in the config / app.php file.
* Add the RichPreview component to the main design.
* Add the preview information for each page in the tab 'meta' and 'rich preview' when you edit page (backend/cms)
 
if your page is a dynamic, you can override the variables:

```php
function onEnd() {
    $this->page->meta_title       = "$var_my_title";
    $this->page->meta_description = "$var_my_description";
    $this->page->og_title         = "$var_my_title";
    $this->page->og_description   = "$var_my_description";
    $this->page->og_image         = "$var_my_link_image";
}
```