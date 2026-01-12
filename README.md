# WordPress Тема: "Animal Shelter" (Приют Дай лапу)

![WordPress](https://img.shields.io/badge/WordPress-21759B?style=flat&logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/status-завершён-success)

Кастомная WordPress тема для сайта приюта животных. Проект демонстрирует навыки интеграции готовой верстки в экосистему WordPress с использованием правильных практик разработки тем.

## Цель проекта

Перенос статичного HTML/CSS/JS-лендинга в полноценную WordPress тему с:
- Подключением стилей и скриптов через `wp_enqueue_scripts`
- Использованием WordPress функций для работы с путями
- Сохранением адаптивного дизайна и функциональности
- Созданием базовой структуры темы

## Технологии и навыки

### WordPress Development
- **Создание кастомной темы** с нуля
- **Правильное подключение ресурсов** через `wp_enqueue_style()` и `wp_enqueue_script()`
- **Использование WordPress функций**: 
  - `get_template_directory_uri()` — для корректных путей к ресурсам
  - `language_attributes()` — для атрибутов языка
  - `body_class()` — для классов body
  - `wp_head()` / `wp_footer()` — хуки для скриптов и стилей
- **Интеграция статичной верстки** в динамическую CMS

### Frontend
- **HTML5** — семантическая разметка
- **CSS3** — кастомные стили
- **Bootstrap 5** — адаптивная сетка (подключена локально)
- **PHP** — шаблонизация и логика WordPress
