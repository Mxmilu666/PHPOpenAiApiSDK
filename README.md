# PHPOpenAiSDK
简单的基于PHP的Openai对接开发SDK
Docking Openai API based on PHP

## ⚙️ 格式
本SDK定义了两个函数,分别为:
openai($APIkey,$model,$prompt,$max_tokens);
openaichat($APIkey,$model,$role,$message,$max_tokens);
具体参数请参考[OpenAi文档]([https://www.mdui.org/](https://platform.openai.com/docs/api-reference/introduction))
## 🛠️ 如何使用
将openai.php拉下来后即可使用
示例:
``` shell
include "./openai.php";
echo openai('Key','text-davinci-003','你好',400);
echo openaichat('Key','gpt-3.5-turbo','user','你好!',400);
```
## 📖许可证
项目采用`Apache-2.0 license`协议开源
