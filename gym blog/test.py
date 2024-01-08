from timeit import default_timer

def test(number):
    resultsgen = []
    resultslist = []
    for i in range(number):
        start = default_timer()
        s = sum(i for i in range(100000) if i % 3 == 1)
        end = default_timer()
        resultsgen.append(end - start)

        start = default_timer()
        s = sum([i for i in range(100000) if i % 3 == 1])
        end = default_timer()
        resultslist.append(end - start)
    return resultsgen, resultslist

result = test(1000)
# Print averages:
print(f"Generator: {sum(result[0])/len(result[0])}")
print(f"List: {sum(result[1])/len(result[1])}")