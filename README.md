# Kirby panel year

## Setup

Use `{{ site.getYear }}` to display the current year in your panel fields.

Example:

```yml
fields:
  copyright:
    label:
      en: Copyright
      de: Copyright
    before: "© {{ site.getYear }}"
    type: text
```
