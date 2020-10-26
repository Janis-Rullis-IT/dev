
## [Validation patterns](https://github.com/janis-rullis/lm1-symfony5-vue2-api/issues/23#issuecomment-711147395)

* https://www.google.com/search?q=best+practice+for+validation+in+object&oq=best+practice+for+validation+in+object
* https://www.sitepoint.com/community/t/oop-form-validator-class-a-good-way-to-architect/39059/16
* https://reflectoring.io/bean-validation-anti-patterns/
* https://dzone.com/articles/validation-in-java-applications
* https://thephp.cc/news/2015/11/how-to-validate-data

### Conclusion

After reading these practices I understood that **I still PREFER VALIDATION placed IN A METHOD that always sets the value and NOT in the CONSTRUCT**.  
This is because when putting VALIDATION IN CONSTRUCT **the method can be called LATER and thus validation rules BYPASSED and INVALID VALUES SET**.

