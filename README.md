Drupal Developer Resume Builder
- A custom module created to quickly create a personal resume website on Drupal 9 & 10

While this is custom module is specifically tailored for a Drupal developer's resume, it can be easily addapted to fit a resume for any/all lines of work

The module consists of:

1 node entity bundle of type "Work History" (machine name "work_history") created via configuration files located in config\install
- 1 entity configuration file for the new bundle
- 6 entity bundle fields
- 1 field storage configuration file for each of the 6 entity bundle fields to attach them to the work history bundle
- 1 view display configuration for the work history bundle
- 1 form display configuration for the work history bundle
- Optional use of a json(JavaScript Object Notation) file of structured data objects used to prefill in nodes of work history upon module install
  - to use this feature, change the file name of work_experience_optional.json to work_experience.json, open the file, and replace the demo data with your data following the array structure

3 custom taxonomy vocabularies created via hook_install inside the developer_resume.module file, along with a custom field attached for display weight allow you to order them as you please
- Optional use of a json(JavaScript Object Notation) file of structured data objects used to prefill in terms for the 3 taxonomy vocabularies upon module install
  - To use this feature, change the file name of vocabulary_terms_optional.json to vocabulary_terms.json, open the file, and replace the demo data with your data following the array structure
 
1 configuration form along with routing.yml file to set the path to /admin/config/development/developer_resume
- This form ficilitates entry of your personal details, along with your education details
- Optional use of a json(JavaScript Object Notation) file of structured data objects used to prefill in your personal and education details upon module install
  - To use this feature, change the file name of personal_details_optional.json to personal_details.json, open the file, and replace the demo data with your data following the array structure

7 block congfiguration files to attach needed blocks to your theme

2 custom twig templates to ficilitate proper front end display

A module defined library.yml file to attach 1 custom css file and 1 custom JavaScript file to the node--work-history.html.twig template

5 programatic block plugins allowing placement of blocks to theme regions
  - The SkillsBlock.php block plugin also demonstrates the use of custom block configurations to select the taxonomy vocabulary the block should get terms for

-------------------------------------------------------- MODULE DEFINED HOOKS --------------------------------------------------------

HOOK_INSTALL
- creates the taxonomy vocabulary, along with the optional creation of nodes, terms, and custom module configuration values upon module install

HOOK_UNINSTALL
- removes the taxonomy vocabulary and any nodes of type work history (allowing the module to be installed again without errors due to existing machine names for vocabulary and entity bundles)

HOOK_THEME_REGISTRY_ALTER
- needed to define the naming convention for the custom twig files to be used

HOOK_PREPROCESS_NODE
- gathers data and formats them prior to the render layer for the work history node display
