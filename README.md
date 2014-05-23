Fake
====

A Craft plugin that wraps https://github.com/fzaninotto/Faker

Usage
-----

```
{% set fake = craft.fake.factory %}

{{ fake.address }}

{{ fake.name }}

{% for paragraph in fake.paragraphs(4) %}
  <p>{{ paragraph }}</p>
{% endfor %}
```
