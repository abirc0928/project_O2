from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/Project-O2/project_O2/login.php?id=home")
# print(driver.title)



input_user = driver.find_element_by_xpath('//*[@id="col1"]/div[2]/input')
input_pass = driver.find_element_by_xpath('//*[@id="col1"]/div[3]/input')

input_user.send_keys("admin@gmail.com")
time.sleep(2)
input_pass.send_keys("123456")

btnlogin = driver.find_element_by_xpath('//*[@id="col1"]/button[1]')
btnlogin.click()

btnmanage = driver.find_element_by_xpath('//*[@id="Sec"]/div/div[6]/div/div/a[2]')
btnmanage.click()


btnaccept=driver.find_element_by_xpath('//*[@id="example"]/tbody/tr[1]/td[5]/a[1]')
btnaccept.click()


try:
	banner = driver.find_element_by_xpath('//*[@id="example"]/tbody/tr[1]/td[4]')

	if banner.text == "Accepted":  
		print("Test is successfull")
	else:
		print("Test unsuccessfull")

except Exception as e:
	print(e)

print("Finish")


while True:
	pass