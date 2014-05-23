Fake
====

A Craft plugin that wraps https://github.com/fzaninotto/Faker

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
