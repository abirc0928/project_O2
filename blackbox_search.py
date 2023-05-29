from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/Final_Project_O2/n/Flower_Seeds.php")

input_email = driver.find_element_by_xpath('//*[@id="col1"]/div[2]/input')
input_password = driver.find_element_by_xpath('//*[@id="col1"]/div[3]/input') 
input_login_btn = driver.find_element_by_xpath('//*[@id="col1"]/button[1]')


input_email.send_keys("user@gmail.com")
input_password.send_keys("123456")
input_login_btn.click()

driver.get("http://localhost/Final_Project_O2/n/Flower_Seeds.php")

input1 = driver.find_element_by_xpath('//*[@id="pad"]/input')
input2 = driver.find_element_by_xpath('//*[@id="pad2"]/select')

input_btn = driver.find_element_by_xpath('//*[@id="pad3"]/button[1]')


#input1.send_keys("lilly")
input1.send_keys("rose")
input2.send_keys("Name")
input_btn.click()


#driver.get("http://localhost/Final_Project_O2/n/login.php")



while True:
	pass