from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/Project-O2/project_O2/login.php?id=home")
# print(driver.title)



input_user = driver.find_element_by_xpath('//*[@id="col1"]/div[2]/input')
input_pass = driver.find_element_by_xpath('//*[@id="col1"]/div[3]/input')

input_user.send_keys("maun@gmail.com")
time.sleep(2)
input_pass.send_keys("maun")

btnlogin = driver.find_element_by_xpath('//*[@id="col1"]/button[1]')
btnlogin.click()

btnrecycle = driver.find_element_by_xpath('//*[@id="Sec3"]/div/div[3]/div/button')
btnrecycle.click()

input_address=driver.find_element_by_xpath('//*[@id="address"]')
input_description=driver.find_element_by_xpath('//*[@id="description"]')

input_address.send_keys("America")
time.sleep(2)
input_description.send_keys("Fifty Gold")
time.sleep(2)

btnsubmit=driver.find_element_by_xpath('//*[@id="btsubmit"]')
btnsubmit.click()


try:
	banner = driver.find_element_by_xpath('/html/body/form/div/p')

	if banner.text == "Successfully Added in the Database":  
		print("Test is successfull")
	else:
		print("Test unsuccessfull")

except Exception as e:
	print(e)

print("Finish")


while True:
	pass