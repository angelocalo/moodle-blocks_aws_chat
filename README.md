# moodle-block_aws_chat



### AWS AI chat block for Moodle

This block allows your Moodle users to get 24/7 chat support via AWS Claude Anthropic AI. The block offers multiple options for customizing the persona of the AI and the prompt it is given, in order to influence the text it outputs.

To get started, create an AWS account. **This plugin requries a commercial subscription via a paid AWS account.**

# Global block settings

The global block settings can be found by going to Site Administration > Plugins > Blocks > Aws Chat Block. The options are:
-  **Block title:** Block Title that you want to see in moodle.
-  **Restrict chat usage to logged-in users:** If this box is checked, only logged-in users will be able to use the chat box.
-  **AWS API Key:** This is where you add the API key given to you by AWS
-  **Private Key:** This is where you add the API key given to you by AWS
-  **Assistant name:** When the Chat API is enabled, the AI will use this name for itself in the conversation. It is also always used for the UI headings in the chat window.
-  **AWS region:** You can choose the AWS region that you want to use.

### Chat  settings
-  **Prompt:** Here you can edit the text added to the top of the conversation in order to influence the AI's persona and responses


### Advanced
These are extra, advanced parameters to adjust the behavior of the model
- **Temperature:** Controls randomness : Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.
- **Number of token:** The maximum number of token to generate. Requests can use up to 2,048 tokens shared between prompt and completion. The exact limit varies by model. (One token is roughly 4 characters for normal English text)
