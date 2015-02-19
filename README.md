Fake
====

A Craft plugin that wraps https://github.com/fzaninotto/Faker

Installation
------------

Clone or unzip this repository into a `'fake'` directory in your Craft plugins directory, then enable from the plugin settings page.

Usage
-----

```
{# create a new factory for the current locale #}
{% set fake = craft.fake.factory %}

{# or explicitly pass one in #}
{% set fake = craft.fake.factory('en_GB') %}

{{ fake.address }}

{{ fake.name }}

{% for paragraph in fake.paragraphs(4) %}
  <p>{{ paragraph }}</p>
{% endfor %}
```
